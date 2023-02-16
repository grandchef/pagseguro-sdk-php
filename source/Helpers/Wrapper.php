<?php

namespace PagSeguro\Helpers;

class Wrapper
{
    public static function environment($config)
    {
        return [
            'environment' => $config::ENV
        ];
    }

    public static function credentials($config)
    {
        return [
            'credentials' => [
                'email' => $config::EMAIL,
                'token' => [
                    'environment' => [
                        'production' => $config::TOKEN_PRODUCTION,
                        'sandbox' => $config::TOKEN_SANDBOX
                    ]
                ],
                'appId' => [
                    'environment' => [
                        'production' => $config::APP_ID_PRODUCTION,
                        'sandbox' => $config::APP_ID_SANDBOX
                    ]
                ],
                'appKey' => [
                    'environment' => [
                        'production' => $config::APP_KEY_PRODUCTION,
                        'sandbox' => $config::APP_KEY_SANDBOX
                    ]
                ]
            ]
        ];
    }

    public static function charset($config)
    {
        return [
            'charset' => $config::CHARSET
        ];
    }

    public static function log($config)
    {
        return [
            'log' => [
                'active' => $config::LOG_ACTIVE,
                'location' => $config::LOG_LOCATION
            ]
        ];
    }
}
