<?php
return[
    "quickbooks"=>[
        'live'=>[
            'auth_mode' => 'oauth2',
            'ClientID'=>'ABxiVRxTgjiZgdclhlgxd2sc19qZANROAX8yOpGH7cuYOC6wDN',
            'ClientSecret'=>'NTMlXc4zrBb15sexS6h8747VRfJVGFBF0HiVfe1r',
            'RedirectURI'=>'https://developer.intuit.com/v2/OAuth2Playground/RedirectUrl',
            'scope' => "com.intuit.quickbooks.accounting",
            'baseUrl'=>'Production'
        ],
        'dev'=>[
            'auth_mode' => 'oauth2',
            'ClientID'=>'ABxiVRxTgjiZgdclhlgxd2sc19qZANROAX8yOpGH7cuYOC6wDN',
            'ClientSecret'=>'NTMlXc4zrBb15sexS6h8747VRfJVGFBF0HiVfe1r',
            'RedirectURI'=>'https://developer.intuit.com/v2/OAuth2Playground/RedirectUrl',
            'scope' => "com.intuit.quickbooks.accounting",
            'baseUrl'=>'Development'
            
        ],
    ]
    
];