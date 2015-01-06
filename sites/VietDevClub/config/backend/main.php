<?php
//$params = array_merge(
//    require(__DIR__ . '/../../common/config/params.php'),
//    require(__DIR__ . '/../../common/config/params-local.php'),
//    require(__DIR__ . '/params.php'),
//    require(__DIR__ . '/params-local.php')
//);

return [
    'id' => APP_ID,
    'runtimePath' => dirname(__DIR__).'/../runtime/'.APP_ID,
    'controllerNamespace' => 'app\controllers',
    'defaultRoute' => 'cpanel/index',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'cpanel/error',
        ],
    ],
//    'params' => $params,
];
