<?php

namespace PagSeguro\Services\DirectPayment;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Parsers\DirectPayment\Boleto\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Boleto
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public static function checkout(
        Credentials $credentials,
        \PagSeguro\Domains\Requests\DirectPayment\Boleto $payment
    ) {
        Logger::info('Begin', ['service' => 'DirectPayment.Boleto']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf('POST: %s', self::request($connection)),
                ['service' => 'DirectPayment.Boleto']
            );
            Logger::info(
                sprintf(
                    'Params: %s',
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
                sprintf('Boleto Payment Link URL: %s', $response->getPaymentLink()),
                ['service' => 'DirectPayment.Boleto']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Session']);
            throw $exception;
        }
    }

    /**
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildDirectPaymentRequestUrl().'?'.$connection->buildCredentialsQuery();
    }
}
