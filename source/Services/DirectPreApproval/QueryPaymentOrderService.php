<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder;
use PagSeguro\Parsers\DirectPreApproval\QueryPaymentOrderParsers;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class QueryPaymentOrderService
 *
 */
class QueryPaymentOrderService
{
    /**
     * @return mixed
     *
     * @throws \Exception
     */
    public static function create(Credentials $credentials, QueryPaymentOrder $queryPaymentOrder)
    {
        Logger::info('Begin', ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf('POST: %s', self::request($connection, QueryPaymentOrderParsers::getPreApprovalCode($queryPaymentOrder))), ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(QueryPaymentOrderParsers::getData($queryPaymentOrder))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->get(
                self::request($connection, QueryPaymentOrderParsers::getPreApprovalCode($queryPaymentOrder), QueryPaymentOrderParsers::getData($queryPaymentOrder)),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new QueryPaymentOrderParsers
            );
            Logger::info(
                sprintf('DirectPreApproval URL: %s', json_encode(self::response($response))),
                ['service' => 'DirectPreApproval']
            );

            return self::response($response);
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'DirectPreApproval']);
            throw $exception;
        }
    }

    /**
     * @param  null  $params
     * @return string
     */
    private static function request(Connection\Data $connection, $preApprovalCode, $params = null)
    {
        return $connection->buildDirectPreApprovalQueryPaymentOrderRequestUrl($preApprovalCode).'?'.$connection->buildCredentialsQuery().($params ? '&'.$params : '');
    }

    /**
     * @return mixed
     */
    private static function response($response)
    {
        return $response;
    }
}
