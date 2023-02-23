<?php

namespace PagSeguro\Services\Application\Search;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\Authorization\Search\Code\Request;
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
        Logger::info('Begin', ['service' => 'Application.Search.Notification']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf('GET: %s', self::request($connection, $code)),
                ['service' => 'Application.Search.Notification']
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
                    'Creation Date: %s, Code: %s',
                    $response->getCreationDate(),
                    $response->getCode()
                ),
                ['service' => 'Application.Search.Notification']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Application.Search.Notification']);
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
            $connection->buildNotificationAuthorizationRequestUrl(),
            $code,
            $connection->buildCredentialsQuery()
        );
    }
}
