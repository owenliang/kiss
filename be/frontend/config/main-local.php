<?php

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'URV-NK_fdRObZGUumb7_5JSLBjAg_XXo',
            'enableCsrfValidation' => false,
            'enableCookieValidation' => false,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'article/<id:\d+>' => "ai/get-article"
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
                    'maxLogFiles' => 20,
                    'logFile' => '@runtime/logs/app.log',
                    'logVars' => [],
                ],
            ],
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
