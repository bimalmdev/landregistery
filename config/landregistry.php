<?php
return [
  'username' => env('LAND_REG_USERNAME', ''),
  'password' => env('LAND_REG_PASSWORD', ''),
  'type' => [
    'ApplicationEnquiryV1_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'ApplicationEnquiryV1_0WebService?wsdl'
    ],
    'ApplicationEnquiryV1_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'ApplicationEnquiryV1_0PollRequestWebService?wsdl'
    ],
    'DaylistEnquiryV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'DaylistEnquiryV2_0WebService?wsdl'
    ],
    'DischargeActivityV1_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'DischargeActivityV1_0PollRequestWebService?wsdl'
    ],
    'EnquiryByPropertyDescriptionV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'EnquiryByPropertyDescriptionV2_0WebService?wsdl'
    ],
    'EnquiryByPropertyDescriptionV2_0PollWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'EnquiryByPropertyDescriptionV2_0PollWebService?wsdl'
    ],
    'BankruptcySearchV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'BankruptcySearchV2_0WebService?wsdl'
    ],
    'BankruptcySearchV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'BankruptcySearchV2_0PollRequestWebService?wsdl'
    ],
    'BankruptcySearchV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'BankruptcySearchV2_1WebService?wsdl'
    ],
    'BankruptcySearchV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'BankruptcySearchV2_1PollRequestWebService?wsdl'
    ],
    'FullSearchV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'FullSearchV2_0WebService?wsdl'
    ],
    'FullSearchV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'FullSearchV2_0PollRequestWebService?wsdl'
    ],
    'FullSearchV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'FullSearchV2_1WebService?wsdl'
    ],
    'FullSearchV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'FullSearchV2_1PollRequestWebService?wsdl'
    ],
    'OfficialCopyTitleKnownV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialCopyTitleKnownV2_0WebService?wsdl'
    ],
    'OC1TitleKnownV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OC1TitleKnownV2_0PollRequestWebService?wsdl'
    ],
    'OfficialCopyTitleKnownV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialCopyTitleKnownV2_1WebService?wsdl'
    ],
    'OC1TitleKnownV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OC1TitleKnownV2_1PollRequestWebService?wsdl'
    ],
    'OfficialSearchOfPartV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchOfPartV2_0WebService?wsdl'
    ],
    'OfficialSearchOfPartV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchOfPartV2_0PollRequestWebService?wsdl'
    ],
    'OfficialSearchOfPartV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchOfPartV2_1WebService?wsdl'
    ],
    'OfficialSearchOfPartV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchOfPartV2_1PollRequestWebService?wsdl'
    ],
    'OfficialSearchV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchV2_0WebService?wsdl'
    ],
    'OfficialSearchV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchV2_0PollRequestWebService?wsdl'
    ],
    'OfficialSearchV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchV2_1WebService?wsdl'
    ],
    'OfficialSearchV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialSearchV2_1PollRequestWebService?wsdl'
    ],
    'OfficialCopyWithSummaryV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialCopyWithSummaryV2_0WebService?wsdl'
    ],
    'OfficialCopyWithSummaryV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialCopyWithSummaryV2_0PollRequestWebService?wsdl'
    ],
    'OfficialCopyWithSummaryV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialCopyWithSummaryV2_1WebService?wsdl'
    ],
    'OfficialCopyWithSummaryV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECBG_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OfficialCopyWithSummaryV2_1PollRequestWebService?wsdl'
    ],
    'SearchOfIndexMapV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'SearchOfIndexMapV2_0WebService?wsdl'
    ],
    'SearchOfIndexMapV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'SearchOfIndexMapV2_0PollRequestWebService?wsdl'
    ],
    'SearchOfIndexMapV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'SearchOfIndexMapV2_1WebService?wsdl'
    ],
    'SearchOfIndexMapV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'SearchOfIndexMapV2_1PollRequestWebService?wsdl'
    ],
    'EDocumentRegistrationV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'EDocumentRegistrationV2_0WebService?wsdl'
    ],
    'EDocumentRegistrationV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'EDocumentRegistrationV2_0PollRequestWebService?wsdl'
    ],
    'AttachmentV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'AttachmentV2_0WebService?wsdl'
    ],
    'AttachmentV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'AttachmentV2_0PollRequestWebService?wsdl'
    ],
    'CorrespondenceV1_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'CorrespondenceV1_0PollRequestWebService?wsdl'
    ],
    'EarlyCompletionV2_0PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'EarlyCompletionV2_0PollRequestWebService?wsdl'
    ],
    'EDocumentRegistrationV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'EDocumentRegistrationV2_1WebService?wsdl'
    ],
    'EDocumentRegistrationV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'EDocumentRegistrationV2_1PollRequestWebService?wsdl'
    ],
    'AttachmentV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'AttachmentV2_1WebService?wsdl'
    ],
    'AttachmentV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'AttachmentV2_1PollRequestWebService?wsdl'
    ],
    'CorrespondenceV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'CorrespondenceV2_1PollRequestWebService?wsdl'
    ],
    'EarlyCompletionV2_1PollRequestWebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECDRS_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECDRS_SoapEngine',
      'end-point' => 'EarlyCompletionV2_1PollRequestWebService?wsdl'
    ],
    'OnlineOwnershipVerificationV1_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/EOOV_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/EOOV_SoapEngine',
      'end-point' => 'OnlineOwnershipVerificationV1_0WebService?wsdl'
    ],
    'LLCSearchV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/ECLLC_StubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/ECLLC_SoapEngine',
      'end-point' => 'LLCSearchV2_0WebService?wsdl'
    ],
    'OutstandingRequestsV2_0WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OutstandingRequestsV2_0WebService?wsdl'
    ],
    'OutstandingRequestsV2_1WebService' => [
      'test-link' => 'https://bgtest.landregistry.gov.uk/b2b/BGStubService',
      'prod-link' => 'https://businessgateway.landregistry.gov.uk/b2b/BGSoapEngine',
      'end-point' => 'OutstandingRequestsV2_1WebService?wsdl'
    ]
  ]
];
