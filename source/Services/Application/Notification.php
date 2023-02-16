<?php

namespace PagSeguro\Services\Application;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Notifications
 * @package PagSeguro\Services\Transactions
 */
class Notification
{
    /**
     * @param Credentials $credentials
     * @return mixed
     * @throws \Exception
     */
    public static function check(Credentials $credentials)
    {
        Logger::info("Begin", ['service' => 'Application.Notification']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf("GET: %s", self::request($connection)), ['service' => 'Application.Notification']);
            $http->get(
                self::request($connection),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new \PagSeguro\Parsers\Authorization\Notification\Request
            );
            Logger::info(
                sprintf(
                    "Date: %s, Code: %s",
                    $response->getDate(),
                    $response->getCode()
                ),
                ['service' => 'Application.Notification']
            );
            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Application.Notification']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildNotificationAuthorizationRequestUrl() . "/" .
            Responsibility::notifications() . "?" . $connection->buildCredentialsQuery();
    }
}
