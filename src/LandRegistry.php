<?php

namespace Dd\LandRegistry;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
class LandRegistry
{
    protected $config;
    protected $userName;
    protected $password;
    protected $baseUrl;
    protected $soapUrl;
    protected $requestXML;
    protected $certPass;
    protected $certFile;
    protected $requestType;

    public function __construct(ConfigRepository $config)
    {
        $this->config = $config;
        $this->userName = $this->config->get('landregistry.username');
        $this->password = $this->config->get('landregistry.password');
        $this->setHeader();  
    }

    public function setSSL($pass,$filePath)
    {
        $this->certPass = $pass;
        $this->certFile = $filePath;  
    }

    protected function setHeader()
    {
        $this->requestXML = '<!-- SOAP envelope starts -->
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:drs="http://drsv1_0.ws.bg.lr.gov/" xmlns:req="http://www.oscre.org/ns/eReg-
         Final/2012/RequestApplicationToChangeRegisterV1_0">
            <!-- SOAP header starts -->
            <soapenv:Header>
                <wsse:Security xmlns:wsse="http://docs.oasis-
         open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                    <wsse:UsernameToken>
                        <wsse:Username>'.$this->userName.'</wsse:Username>
                        <wsse:Password type="http://docs.oasis-open.org/wss/2004/01/oasis-
         200401-wss-username-token-profile-1.0#PasswordText">'.$this->password.'</wsse:Password>
                    </wsse:UsernameToken>
                </wsse:Security>
                <i18n:international xmlns:i18n="http://www.w3.org/2005/09/ws-i18n">
                    <i18n:locale>en</i18n:locale>
                </i18n:international>
            </soapenv:Header>
            <!-- SOAP header ends -->
            <!-- SOAP body starts -->
            <soapenv:Body>
                <!-- SOAP body contains web service request -->
                %%body%%
                </soapenv:Body>
                <!-- SOAP body ends -->
            </soapenv:Envelope>
            <!-- SOAP envelope ends -->';
    }
    
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        if(env('LAND_REG_TEST') == 1)
            $this->baseUrl = $this->config->get('landregistry.type.'.$requestType.'.test-link');
        else
            $this->baseUrl = $this->config->get('landregistry.type.'.$requestType.'.prod-link');
        $this->soapUrl = $this->baseUrl.'/'.$this->config->get('landregistry.type.'.$requestType.'.end-point');        
    }

    public function setBody($body)
    {
        $this->requestXML = str_replace('%%body%%', $body, $this->requestXML);
    }

    public function getResponse()
    {
        if($this->userName == '' || $this->password == '')
        {
            $response = [
                "success" => false,
                "message" => "username or password not found in env"
            ];
            return $response;
        }
        try {
            $header = array(
                "Content-type: text/xml;charset=\"utf-8\"",
                "Accept: text/xml",
                "Cache-Control: no-cache",
                "Pragma: no-cache",
                "SOAPAction: \"".$this->baseUrl."\"",
                "Content-length: ".strlen($this->requestXML),
            );
            // PHP cURL  for https connection with auth
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0); 
            curl_setopt($ch, CURLOPT_SSLCERT, $this->certFile);
            curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $this->certPass);
            curl_setopt($ch, CURLOPT_URL, $this->soapUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->requestXML); // the SOAP request
            // converting
            $response = curl_exec($ch);
            if ($response === false) 
            {
                $response = [
                    "success" => false,
                    "message" => curl_error($ch)
                ];
                curl_close($ch); 
                return $response;           
            }
            else
            {
                curl_close($ch); 
                $response = strtr($response, ['</soap:' => '</', '<soap:' => '<']);
                $response = strtr($response, ['</ns2:' => '</', '<ns2:' => '<']);
                $response = strtr($response, ['</ns3:' => '</', '<ns3:' => '<']);
                $response = strtr($response, ['</ns4:' => '</', '<ns4:' => '<']);
                $xml = @simplexml_load_string($response);
                if(!$xml)
                {
                    $response = [
                        "success" => false,
                        "response" => $response
                    ];
                    return $response;
                }
                $output = json_decode(json_encode($xml), true);
                $response = [
                    "success" => true,
                    "response" => $output
                ];
                return $response;
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
