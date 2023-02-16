<?php

namespace PagSeguro\Resources\Responsibility\Configuration;

use PagSeguro\Resources\Responsibility\Handler;

class Environment implements Handler
{
    private $successor;

    /**
     * @inheritDoc
     */
    public function successor($next)
    {
        $this->successor = $next;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function handler($action, $class)
    {
        if (getenv(\PagSeguro\Enum\Configuration\Environment::ENV) and
            getenv(\PagSeguro\Enum\Configuration\Environment::EMAIL)) {
            return array_merge(
                $this->environment(),
                $this->credentials(),
                $this->charset(),
                $this->log()
            );
        }
        return $this->successor->handler($action, $class);
    }

    private function environment()
    {
        return [
            'environment' => getenv(\PagSeguro\Enum\Configuration\Environment::ENV)
        ];
    }

    private function credentials()
    {
        return [
            'credentials' => [
                'email' => getenv(\PagSeguro\Enum\Configuration\Environment::EMAIL),
                'token' => [
                    'environment' => [
                        'production' => getenv(\PagSeguro\Enum\Configuration\Environment::TOKEN_PRODUCTION),
                        'sandbox' => getenv(\PagSeguro\Enum\Configuration\Environment::TOKEN_SANDBOX)
                    ]
                ],
                'appId' => [
                    'environment' => [
                        'production' => getenv(\PagSeguro\Enum\Configuration\Environment::APP_ID_PRODUCTION),
                        'sandbox' => getenv(\PagSeguro\Enum\Configuration\Environment::APP_ID_SANDBOX)
                    ]
                ],
                'appKey' => [
                    'environment' => [
                        'production' => getenv(\PagSeguro\Enum\Configuration\Environment::APP_KEY_PRODUCTION),
                        'sandbox' => getenv(\PagSeguro\Enum\Configuration\Environment::APP_KEY_SANDBOX)
                    ]
                ]
            ]
        ];
    }

    private function charset()
    {
        return [
            'charset' => getenv(\PagSeguro\Enum\Configuration\Environment::CHARSET)
        ];
    }

    private function log()
    {
        return [
            'log' => [
                'active' => getenv(\PagSeguro\Enum\Configuration\Environment::LOG_ACTIVE),
                'location' => getenv(\PagSeguro\Enum\Configuration\Environment::LOG_LOCATION)
            ]
        ];
    }
}
