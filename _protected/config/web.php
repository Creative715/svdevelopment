<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'SVD - Futures Technology',
    'language' => 'en',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok 
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'images/store', //path to origin images
            'imagesCachePath' => 'images/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick' 
            'placeHolderPath' => '@webroot/images/no-image.png',
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
        'internal' => [
            'class' => 'app\modules\internal\Module',
            'layout' => 'main',
        ],
        'ru' => [
            'class' => 'app\modules\ru\Module',
            'layout' => 'main',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'UeLgkU46J0bjuTPIM6FvEjYMpEPczKQX',
            'BaseUrl' => '',
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
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            [ 
            'pattern' => '',
            'route' => 'site/index',
            'suffix' => ''],
             '<action:index|onas|komleksnaiaraz|designsites|webinterface|udaluprav|pechatplat|kontakty|elektroschema|princschema|konstrrabmack|razprogob|razwebint|sdachakr|tzotzakaz|login|logout>' => 'ru/default/<action>',
             '<action:index|aboutus|contact|ttcastom|develektrichart|devfundchart|complexdev|remotecontrol|webinterfaces|planningpcbs|sitesdesign|constrworklay|devprogprov|devwebinterface|handcompdec|contact|login|logout>' => 'site/<action>',
             'services/<id:\d+>' => 'site/services',
             'ru/uslugi/<id:\d+>' => 'ru/default/uslugi',
             '<id:([0-9])+>/images/image-by-item-and-alias' => 'yii2images/images/image-by-item-and-alias',
             '/images/image-by-item-and-alias' => 'yii2images/images/image-by-item-and-alias',
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
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
