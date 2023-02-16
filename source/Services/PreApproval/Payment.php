<?php

namespace PagSeguro\Services\PreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\PreApproval;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Parsers\PreApproval\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

class Payment
{
    public static function create(Credentials $credentials, PreApproval $preApproval)
    {
        Logger::info("Begin", ['service' => 'PreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf("POST: %s", self::request($connection)), ['service' => 'PreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(Crypto::encrypt(Request::getData($preApproval)))
                ),
                ['service' => 'PreApproval']
            );

            $http->post(
                self::request($connection),
                Request::getData($preApproval),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );
            Logger::info(
                sprintf("PreApproval URL: %s", self::response($connection, $response)),
                ['service' => 'PreApproval']
            );
            return self::response($connection, $response);
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildPreApprovalRequestUrl() . "?" . $connection->buildCredentialsQuery();
    }

    /**
     * @param Connection\Data $connection
     * @param $response
     * @return string
     */
    private static function response(Connection\Data $connection, $response)
    {
        return $connection->buildPreApprovalResponseUrl() . "?code=" . $response->getCode();
    }
}
