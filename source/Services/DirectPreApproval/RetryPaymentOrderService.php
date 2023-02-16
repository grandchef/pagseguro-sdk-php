<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder;
use PagSeguro\Parsers\DirectPreApproval\RetryPaymentOrderParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class RetryPaymentOrderService
 *
 * @package PagSeguro\Services\DirectPreApproval
 */
class RetryPaymentOrderService
{
    /**
     * @param Credentials       $credentials
     * @param RetryPaymentOrder $retryPaymentOrder
     *
     * @return mixed
     * @throws \Exception
     */
    public static function create(Credentials $credentials, RetryPaymentOrder $retryPaymentOrder)
    {
        Logger::info("Begin", ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf("POST: %s", self::request($connection,
                RetryPaymentOrderParser::getData($retryPaymentOrder))), ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(RetryPaymentOrderParser::getData($retryPaymentOrder))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->post(
                self::request($connection, RetryPaymentOrderParser::getData($retryPaymentOrder)),
                RetryPaymentOrderParser::getData($retryPaymentOrder),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new RetryPaymentOrderParser
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
     *
     * @param                 $data
     *
     * @return string
     */
    private static function request(Connection\Data $connection, $data)
    {
        return $connection->buildDirectPreApprovalRetryPaymentOrderUrl(
            $data['preApprovalCode'], $data['paymentOrderCode']) . "?" . $connection->buildCredentialsQuery();
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
