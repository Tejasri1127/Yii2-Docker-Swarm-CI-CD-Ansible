<?php

return [
    'id' => 'sample-app',
    'basePath' => dirname(__DIR__),
    'components' => [
        'request' => [
            'cookieValidationKey' => 'your-secret-key',
        ],
    ],
    'defaultRoute' => 'site/index',
];

