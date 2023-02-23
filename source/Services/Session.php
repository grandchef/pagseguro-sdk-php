<?php

namespace PagSeguro\Services;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\Session\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** The Session Service class
 *
 */
class Session
{
    public static function create(Credentials $credentials)
    {
        Logger::info('Begin', ['service' => 'Session']);

        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf('POST: %s', self::request($connection)), ['service' => 'Session']);
            $http->post(self::request($connection),
                null,
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding());

            $response = Responsibility::http(
                $http,
                new Request()
            );

            Logger::info(sprintf('Session ID: %s', current($response)), ['service' => 'Session']);

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Session']);
            throw $exception;
        }
    }

    private static function request(Connection\Data $connection)
    {
        return $connection->buildSessionRequestUrl().'?'.$connection->buildCredentialsQuery();
    }
}
