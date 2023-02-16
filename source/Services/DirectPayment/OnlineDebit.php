<?php

namespace PagSeguro\Services\DirectPayment;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Helpers\Mask;
use PagSeguro\Parsers\DirectPayment\OnlineDebit\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 * @package PagSeguro\Services\DirectPayment
 */
class OnlineDebit
{
    /**
     * @param \PagSeguro\Domains\Account\Credentials $credentials
     * @param \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit $payment
     * @return string
     * @throws \Exception
     */
    public static function checkout(
        Credentials $credentials,
        \PagSeguro\Domains\Requests\DirectPayment\OnlineDebit $payment
    )
    {
        Logger::info("Begin", ['service' => 'DirectPayment.OnlineDebit']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf("POST: %s", self::request($connection)),
                ['service' => 'DirectPayment.OnlineDebit']
            );
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(Crypto::encrypt(Request::getData($payment)))
                ),
                ['service' => 'Checkout']
            );
            $http->post(
                self::request($connection),
                Request::getData($payment),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );

            Logger::info(
                sprintf("Online Debit Payment Link URL: %s", $response->getPaymentLink()),
                ['service' => 'DirectPayment.OnlineDebit']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'DirectPayment.OnlineDebit']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildDirectPaymentRequestUrl() . "?" . $connection->buildCredentialsQuery();
    }
}
