<?php

namespace PagSeguro\Services\Transactions;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Parsers\Transaction\Refund\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Refund
{
    /**
     * @param  \PagSeguro\Domains\Requests\Payment  $payment
     * @param  bool  $onlyCode
     * @return string
     *
     * @throws \Exception
     */
    public static function create(Credentials $credentials, $code, $value = null)
    {
        Logger::info('Begin', ['service' => 'Refund']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf('POST: %s', self::request($connection)), ['service' => 'Refund']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(Crypto::encrypt(Request::getData($code, $value)))
                ),
                ['service' => 'Refund']
            );
            $http->post(
                self::request($connection),
                Request::getData($code, $value),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );

            Logger::info(sprintf('Result: %s', current($response)), ['service' => 'Refund']);

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Refund']);
            throw $exception;
        }
    }

    /**
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildRefundRequestUrl().'?'.$connection->buildCredentialsQuery();
    }
}
