<?php

namespace PagSeguro\Services\Application;

use PagSeguro\Configuration\Configure;
use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\Authorization\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

class Authorization
{
    public static function create(Credentials $credentials, \PagSeguro\Domains\Requests\Authorization $authorization)
    {
        Logger::info("Begin", ['service' => 'Authorization']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/xml;');
            Logger::info(sprintf("POST: %s", self::request($connection)), ['service' => 'Authorization']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    Request::getData($authorization)
                ),
                ['service' => 'Checkout']
            );
            $http->post(
                self::request($connection),
                Request::getData($authorization),
                20,
                Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http($http, new Request);
            Logger::info(
                sprintf(
                    "Authorization URL: %s",
                    self::response($connection, $response)
                ),
                ['service' => 'Authorization']
            );

            return self::response($connection, $response);
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Authorization']);
            die($exception);
        }
    }

    /**
     * @param Connection\Data $connection
     *
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildAuthorizationRequestUrl() . "?" . $connection->buildCredentialsQuery();
    }

    /**
     * @param Connection\Data $connection
     * @param                 $response
     *
     * @return string
     */
    private static function response(Connection\Data $connection, $response)
    {
        return $connection->buildAuthorizationResponseUrl() . "?code=" . $response->getCode();
    }
}
