<?php

namespace PagSeguro\Services\Checkout;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Payment
{
    /**
     * @param  bool  $onlyCode
     * @return string
     *
     * @throws \Exception
     */
    public static function checkout(Credentials $credentials, \PagSeguro\Domains\Requests\Payment $payment, $onlyCode)
    {
        Logger::info('Begin', ['service' => 'Checkout']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf('POST: %s', self::request($connection)), ['service' => 'Checkout']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(Crypto::encrypt(\PagSeguro\Parsers\Checkout\Request::getData($payment)))
                ),
                ['service' => 'Checkout']
            );
            $http->post(
                self::request($connection),
                \PagSeguro\Parsers\Checkout\Request::getData($payment),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new \PagSeguro\Parsers\Checkout\Request
            );

            if ($onlyCode) {
                Logger::info(sprintf('Code: %s', current($response)), ['service' => 'Checkout']);

                return $response;
            }
            Logger::info(
                sprintf('Checkout URL: %s', self::response($connection, $response)),
                ['service' => 'Checkout']
            );

            return self::response($connection, $response);
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
        return $connection->buildPaymentRequestUrl().'?'.$connection->buildCredentialsQuery();
    }

    /**
     * @return string
     */
    private static function response(Connection\Data $connection, $response)
    {
        return $connection->buildPaymentResponseUrl().'?code='.$response->getCode();
    }
}
