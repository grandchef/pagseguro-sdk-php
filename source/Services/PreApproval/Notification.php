<?php

namespace PagSeguro\Services\PreApproval;

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
        Logger::info("Begin", ['service' => 'PreApproval.Notification']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf("GET: %s", self::request($connection)), ['service' => 'PreApproval.Notification']);
            $http->get(
                self::request($connection),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new \PagSeguro\Parsers\PreApproval\Notification\Request
            );
            Logger::info(
                sprintf("Date: %s, Code: %s", $response->getDate(), $response->getCode()),
                ['service' => 'PreApproval.Notification']
            );
            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval.Notification']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildNotificationPreApprovalRequestUrl() . "/" .
            Responsibility::notifications() . "/?" . $connection->buildCredentialsQuery();
    }
}
