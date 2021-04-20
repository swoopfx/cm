<?php
return array(
    'modules' => array(
        'AcMailer',
        'Application',
        'ZfcAdmin',
        'CsnUser',
        'DoctrineModule',
        'DoctrineORMModule',
        'AssetManager',
        'Phpro\\Chart',
        'ZfrPusherModule',
        'Welcome',
        // 'Navigations',
        'Home',
        'Offer',
        'Settings',
        'Users',
        'Object',
        'Report',
        'Claims',
        'IMServices',
        'Transactions',
        'Policy',
        'Report',
        'BrokersTool',
        'Settings',
        'GeneralServicer',
        'Offer',
        'Json',
        'Proposal',
        'Customer',
        'ZfcRbac',
        'Wallet',
        'Customer',
        'SMS',
        'Job',
        'Comments',
        'Packages',
        'Messages',
        'Analytics',
        'WasabiLib',
        'Help',
        'Webhook',
        'General',
        'Proparty',
        'AwsModule','Accounting'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
            './module','./module'
        ),
        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php'
        )
    )
);