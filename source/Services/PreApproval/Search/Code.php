<?php

namespace PagSeguro\Services\PreApproval\Search;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\PreApproval\Search\Code\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 * @package PagSeguro\Services\Checkout
 */
class Code
{

    /**
     * @param \PagSeguro\Domains\Account\Credentials $credentials
     * @param $code
     * @return string
     * @throws \Exception
     */
    public static function search(Credentials $credentials, $code)
    {

        Logger::info("Begin", ['service' => 'PreApproval.Search.Code']);

        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf("GET: %s", self::request($connection, $code)),
                ['service' => 'PreApproval.Search.Code']
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
                    "Date: %s, Code: %s",
                    $response->getDate(),
                    $response->getCode()
                ),
                ['service' => 'PreApproval.Search.Code']
            );
            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval.Search.Code']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection, $code)
    {
        return sprintf(
            "%s/%s/?%s",
            $connection->buildPreApprovalSearchRequestUrl(),
            $code,
            $connection->buildCredentialsQuery()
        );
    }
}
