<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\Status;
use PagSeguro\Parsers\DirectPreApproval\StatusParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class StatusService
 *
 */
class StatusService
{
    /**
     * @return mixed
     *
     * @throws \Exception
     */
    public static function create(Credentials $credentials, Status $status)
    {
        Logger::info('Begin', ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf('PUT: %s', self::request($connection, StatusParser::getPreApprovalCode($status))),
                ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(StatusParser::getData($status))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->put(
                self::request($connection, StatusParser::getPreApprovalCode($status)),
                StatusParser::getData($status),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new StatusParser
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
        return $connection->buildDirectPreApprovalStatusRequestUrl($preApprovalCode).'?'.$connection->buildCredentialsQuery();
    }

    /**
     * @return mixed
     */
    private static function response($response)
    {
        return $response;
    }
}
