<?php

$config = [
    'defaultRoute' => 'index', // 默认路由
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
            'enableCsrfValidation' => false,
            'enableCookieValidation' => false,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'article/<articleId:\d+>' => "article/index",
                '<page:\d+>' => 'index/index',
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'error/index',
        ],
        'log' => [
            'traceLevel' => 0,
            'flushInterval' => 1,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'exportInterval' => 1,
                    'maxFileSize' => 1 * 1024 * 1024, // 1G
                    'maxLogFiles' => 5,
                    'logFile' => '@runtime/logs/app.log',
                    'logVars' => [],
                ],
            ],
        ],
        'response' => [
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class' => 'yii\web\JsonResponseFormatter',
                    'encodeOptions' => 230 | JSON_FORCE_OBJECT,
                ]
            ]
        ]
    ],
];

return $config;
