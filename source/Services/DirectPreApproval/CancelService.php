<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\Cancel;
use PagSeguro\Parsers\DirectPreApproval\CancelParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class CancelService
 *
 */
class CancelService
{
    /**
     * @return mixed
     *
     * @throws \Exception
     */
    public static function create(Credentials $credentials, Cancel $cancel)
    {
        Logger::info('Begin', ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf('POST: %s', self::request($connection, CancelParser::getPreApprovalCode($cancel))),
                ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(CancelParser::getData($cancel))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->put(
                self::request($connection, CancelParser::getPreApprovalCode($cancel)),
                CancelParser::getData($cancel),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new CancelParser
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
     * @return string
     */
    private static function request(Connection\Data $connection, $preApprovalCode)
    {
        return $connection->buildDirectPreApprovalCancelRequestUrl($preApprovalCode).'?'.$connection->buildCredentialsQuery();
    }

    /**
     * @return mixed
     */
    private static function response($response)
    {
        return $response;
    }
}
