<?php

namespace PagSeguro\Resources\Responsibility\Configuration;

use PagSeguro\Resources\Responsibility\Handler;

class Extensible implements Handler
{
    private $successor;

    public function successor($next)
    {
        $this->successor = $next;

        return $this;
    }

    public function handler($action, $class)
    {
        unset($action, $class);
        if (file_exists(PS_CONFIG)) {
            return array_merge(
                $this->environment(),
                $this->credentials(),
                $this->charset(),
                $this->log()
            );
        }
        throw new \InvalidArgumentException('Configuration not found.');
    }

    private function environment()
    {
        return [
            'environment' => current(
                simplexml_load_file(PS_CONFIG)->environment
            ),
        ];
    }

    private function credentials()
    {
        //Loading XML configuration file.
        $xml = simplexml_load_file(PS_CONFIG)->credentials;

        return [
            'credentials' => [
                'email' => current($xml->account->email),
                'token' => [
                    'environment' => [
                        'production' => current($xml->account->production->token),
                        'sandbox' => current($xml->account->sandbox->token),
                    ],
                ],
                'appId' => [
                    'environment' => [
                        'production' => current($xml->application->production->appId),
                        'sandbox' => current($xml->application->sandbox->appId),
                    ],
                ],
                'appKey' => [
                    'environment' => [
                        'production' => current($xml->application->production->appKey),
                        'sandbox' => current($xml->application->sandbox->appKey),
                    ],
                ],
            ],
        ];
    }

    private function charset()
    {
        return [
            'charset' => current(
                simplexml_load_file(PS_CONFIG)->charset
            ),
        ];
    }

    private function log()
    {
        //Loading XML configuration file.
        $xml = simplexml_load_file(PS_CONFIG)->log;

        return [
            'log' => [
                'active' => current($xml->active),
                'location' => current($xml->location),
            ],
        ];
    }
}
