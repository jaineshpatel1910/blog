<?php

return [
    'user' => [
        'model' => 'App\User',
        'foreignKey' => null,
        'ownerKey' => null,
    ],

    'broadcast' => [
        'enable' => true,
        'app_name' => 'talk-example',
        'driver' => env('TALK_BROADCAST_DRIVER', 'pusher'), // pusher or laravel-websockets
        'pusher' => [
            'app_id' => env('PUSHER_APP_ID', '1266688'),
            'app_key' => env('PUSHER_APP_KEY', 'c76e70fb5ca913b354ad'),
            'app_secret' => env('PUSHER_APP_SECRET', '56a4f2a456d588e16752'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER', 'ap2'),
                'encrypted' => env('PUSHER_APP_ENCRYPTION', false),
                'host' => '127.0.0.1',
                'port' => env('LARAVEL_WEBSOCKETS_PORT', 6001),
                'scheme' => 'http',
                'wsHost' => '127.0.0.1',
                'wsPort' => env('LARAVEL_WEBSOCKETS_PORT', 6001),
                'forceTLS' => false,
                'disableStats' => true
            ]
        ],
    ],


    'oembed' => [
        'enabled' => false,
        'url' => '',
        'key' => ''
    ]
];