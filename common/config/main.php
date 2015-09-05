<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'ru',
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'request' => [
            'enableCsrfValidation' => false
        ],
        'authManager' => [
            'class' => '\yii\rbac\DbManager',
            'ruleTable' => 'auth_rule', // Optional
            'itemTable' => 'auth_item',  // Optional
            'itemChildTable' => 'auth_item_child',  // Optional
            'assignmentTable' => 'auth_assignment',  // Optional
            'defaultRoles' => ['guest'],
            'cache' => 'cache',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql.hostinger.com.ua;dbname=u141117920_yii',
            'username' => 'u141117920_tork',
            'password' => '7788Tork',
            'charset' => 'utf8',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
                '<_c:[\w\-]+>' => '<_c>/index',
                '<_c:[\w\-]+>/<_a:[\w\-]+>/<id:\d+>' => '<_c>/<_a>',
            ],
        ],

    ],
];
