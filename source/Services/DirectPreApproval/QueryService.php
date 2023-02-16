<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\Query;
use PagSeguro\Parsers\DirectPreApproval\QueryParsers;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class QueryService
 *
 * @package PagSeguro\Services\DirectPreApproval
 */
class QueryService
{
    /**
     * @param Credentials $credentials
     * @param Query       $directPreApproval
     *
     * @return mixed
     * @throws \Exception
     */
    public static function create(Credentials $credentials, Query $directPreApproval)
    {
        Logger::info("Begin", ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf("POST: %s", self::request($connection)), ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(QueryParsers::getData($directPreApproval))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->get(
                self::request($connection, QueryParsers::getData($directPreApproval), $directPreApproval->preApprovalCode),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new QueryParsers
            );
            Logger::info(
                sprintf("DirectPreApproval URL: %s", json_encode(self::response($response))),
                ['service' => 'DirectPreApproval']
            );

            return self::response($response);
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'DirectPreApproval']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @param null            $params
     *
     * @return string
     */
    private static function request(Connection\Data $connection, $params = null, $preApprovalCode = null)
    {
        if ($preApprovalCode) {
            return $connection->buildDirectPreApprovalQueryRequestUrl() . '/' . $preApprovalCode . "?" . $connection->buildCredentialsQuery();
        }

        return $connection->buildDirectPreApprovalQueryRequestUrl() . "?" . $connection->buildCredentialsQuery() . ($params ? '&' . $params : '');
    }

    /**
     * @param $response
     *
     * @return mixed
     */
    private static function response($response)
    {
        return $response;
    }
}
