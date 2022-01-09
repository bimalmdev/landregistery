# Getting Started with HM Land Registery SOAP API

This project created for testing purpose. It is not good to use in production server

### Install using Composer

Add below to composer.josn
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/bimalmdev/landregistery"
        }
    ]

call
    composer require dd/land-registry

### Laravel Configuration

##convert pfx file to pem format 
    openssl pkcs12 -in cert_file.pfx -out cert_file.pem

##In config/app.php providers array add 
    Dd\LandRegistry\ServiceProvider::class

## Usage example

    $certFile =  Storage::disk('public')->path('cert_file.pem');
    $certPass = "1234";
    
    //call LandRegistery and set PEM certificate file path and PEM pass phrase using setSSL function
    
    $test = App::make('landregistry.wrapper');
    $test->setSSL($certPass,$certFile);
    
    //for  Enquiry by property description V2.0 end point is EnquiryByPropertyDescriptionV2_0WebService?wsdl
    //just set EnquiryByPropertyDescriptionV2_0WebService  as request type using setRequestType 
    //check https://landregistry.github.io/bgtechdoc/pdfs/integrate/HM_Land_Registry_Business_Gateway_developer_guide_v1.5.pdf for request type
    $test->setRequestType('EnquiryByPropertyDescriptionV2_0WebService');

    //create mesage id and set in body request
    $messageId = 'DfltMsgId-'.Carbon::now()->format('Ymd-Hisu');
    //set request body content xml using setBody
    //check https://landregistry.github.io/bgtechdoc/ for request body
    $body = '<!-- SOAP body contains web service request -->
    <ns3:searchProperties xmlns:ns2="http://www.oscre.org/ns/eReg-Final/2011/RequestSearchByPropertyDescriptionV2_0" xmlns:ns3="http://epdv2_0.ws.bg.lr.gov/">
        <arg0>
            <ns2:ID>
                <ns2:MessageID>'.$messageId.'</ns2:MessageID>
            </ns2:ID>
            <ns2:Product>
                <ns2:ExternalReference>
                    <ns2:Reference>ExtRef</ns2:Reference>
                </ns2:ExternalReference>
                <ns2:CustomerReference>
                    <ns2:Reference>CustRef</ns2:Reference>
                </ns2:CustomerReference>
                <ns2:SubjectProperty>
                    <ns2:Address>
                        <ns2:BuildingNumber>99</ns2:BuildingNumber>
                        <ns2:PostcodeZone>TQ56 4HY</ns2:PostcodeZone>
                    </ns2:Address>
                </ns2:SubjectProperty>
            </ns2:Product>
        </arg0>
    </ns3:searchProperties>';
    
    $test->setBody($body);

    //call getResponse() for getting response
    $reponse = $test->getResponse();

