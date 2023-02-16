<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification;
use PagSeguro\Parsers\DirectPreApproval\QueryNotificationParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class QueryNotificationService
 *
 * @package PagSeguro\Services\DirectPreApproval
 */
class QueryNotificationService
{
    /**
     * @param Credentials       $credentials
     * @param QueryNotification $queryNotification
     *
     * @return mixed
     * @throws \Exception
     */
    public static function create(Credentials $credentials, QueryNotification $queryNotification)
    {
        Logger::info("Begin", ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf("GET: %s", self::request($connection, QueryNotificationParser::getData($queryNotification),
                QueryNotificationParser::getNotificationCode($queryNotification))), ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(QueryNotificationParser::getData($queryNotification))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->get(
                self::request($connection, QueryNotificationParser::getData($queryNotification),
                    QueryNotificationParser::getNotificationCode($queryNotification)),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new QueryNotificationParser
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
     * @param null            $preApprovalCode
     *
     * @return string
     */
    private static function request(Connection\Data $connection, $params = null, $preApprovalCode = null)
    {
        return $connection->buildDirectPreApprovalQueryNotificationRequestUrl($preApprovalCode)."?".$connection->buildCredentialsQuery().($params ? '&'.$params : '');
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
