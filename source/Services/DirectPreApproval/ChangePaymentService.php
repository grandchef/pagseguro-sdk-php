<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment;
use PagSeguro\Parsers\DirectPreApproval\ChangePaymentParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class ChangePaymentService
 *
 * @package PagSeguro\Services\DirectPreApproval
 */
class ChangePaymentService
{
    /**
     * @param Credentials $credentials
     * @param ChangePayment $changePayment
     *
     * @return mixed
     * @throws \Exception
     */
    public static function create(Credentials $credentials, ChangePayment $changePayment)
    {
        Logger::info("Begin", ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf("POST: %s",
                self::request($connection, ChangePaymentParser::getPreApprovalCode($changePayment))),
                ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(ChangePaymentParser::getData($changePayment))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->put(
                self::request($connection, ChangePaymentParser::getPreApprovalCode($changePayment)),
                ChangePaymentParser::getData($changePayment),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new ChangePaymentParser
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
     * @param                 $preApprovalCode
     *
     * @return string
     */
    private static function request(Connection\Data $connection, $preApprovalCode)
    {
        return $connection->buildDirectPreApprovalChangePaymentRequestUrl($preApprovalCode) . "?" . $connection->buildCredentialsQuery();
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
