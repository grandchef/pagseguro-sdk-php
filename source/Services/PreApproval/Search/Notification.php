<?php

namespace PagSeguro\Services\PreApproval\Search;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\PreApproval\Search\Code\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Notification
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public static function search(Credentials $credentials, $code)
    {
        Logger::info('Begin', ['service' => 'PreApproval.Search.Notification']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf('GET: %s', self::request($connection, $code)),
                ['service' => 'PreApproval.Search.Notification']
            );
            $http->get(
                self::request($connection, $code),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );
            Logger::info(
                sprintf(
                    'Tracker: %s, Date: %s',
                    $response->getTracker(),
                    $response->getDate()
                ),
                ['service' => 'Application.Search.Notification']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval.Search.Notification']);
            throw $exception;
        }
    }

    /**
     * @return string
     */
    private static function request(Connection\Data $connection, $code)
    {
        return sprintf(
            '%s/%s/?%s',
            $connection->buildNotificationPreApprovalRequestUrl(),
            $code,
            $connection->buildCredentialsQuery()
        );
    }
}
