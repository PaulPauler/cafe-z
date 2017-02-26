<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'regregreg',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,

            'rules' => [
                '/' => 'site/index',
                'about' => 'site/about',
                'menu' => 'site/menu',
                'gallery' => 'site/gallery',
                'contact' => 'site/contact',
                'login' => 'site/login',
                'logout' => 'site/logout',
                'say' => 'site/say',
                'say/<word>' => 'site/say',
                'entry' => 'site/entry',
                'captcha' => 'site/captcha',
                
                //admin menu CRUD
                'admin' => 'site/login',
                
                'admin/main' => 'menu/item/main',

                'admin/menu' => 'menu/item/index',
                'admin/menu/item/index' => 'menu/item/index',
                'admin/menu/item/create' => 'menu/item/create',
                'admin/menu/item/view' => 'menu/item/view',
                'admin/menu/item/update' => 'menu/item/update',
                'admin/menu/item/delete' => 'menu/item/delete',
                
                'admin/menu/category/index' => 'menu/category/index',
                'admin/menu/category/create' => 'menu/category/create',
                'admin/menu/category/view' => 'menu/category/view',
                'admin/menu/category/delete' => 'menu/category/delete',
                'admin/menu/category/update' => 'menu/category/update',

                //static
                'img' => 'img',
                'js' => 'js'
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
    ];
}

return $config;
