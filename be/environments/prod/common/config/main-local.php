<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=kiss',
            'username' => 'root',
            'password' => 'baidu@123',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
        'cache' => [
            'class' => 'yii\redis\Cache',
        ],
        'session' => [
            'name' => 'JSESSIONID',
            'class' => 'yii\redis\Session',
            'timeout' => 30 * 86400, // 服务端会话数据保存30天
            'cookieParams' => [
                'lifetime' => 30 * 86400,
                'path' => '/',
                'secure' => false,
                'httponly' => false,
            ], // 客户端会话cookie配置
        ],
    ]
];
