<?php

namespace PagSeguro\Services\Transactions;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Parsers\Cancel\Request;
use PagSeguro\Parsers\Cancel\Response;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Cancel
{
    /**
     * @return Response
     *
     * @throws \Exception
     */
    public static function create(Credentials $credentials, $code)
    {
        Logger::info('Begin', ['service' => 'Cancel']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf('POST: %s', self::request($connection)), ['service' => 'Cancel']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(Crypto::encrypt(Request::getData($code)))
                ),
                ['service' => 'Cancel']
            );
            $http->post(
                self::request($connection),
                Request::getData($code),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );

            Logger::info(sprintf('Result: %s', current($response)), ['service' => 'Cancel']);

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Cancel']);
            throw $exception;
        }
    }

    /**
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildCancelRequestUrl().'?'.$connection->buildCredentialsQuery();
    }
}
