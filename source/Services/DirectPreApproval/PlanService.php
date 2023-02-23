<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\DirectPreApproval\PlanParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class PlanService
 *
 */
class PlanService
{
    /**
     * @return mixed
     *
     * @throws \Exception
     */
    public static function create(Credentials $credentials, $data)
    {
        Logger::info('Begin', ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf('POST: %s', self::request($connection)), ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    'Params: %s',
                    json_encode(PlanParser::getData($data))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->post(
                self::request($connection),
                PlanParser::getData($data),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new PlanParser()
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
    private static function request(Connection\Data $connection)
    {
        return $connection->buildDirectPreApprovalPlanRequestUrl().'?'.$connection->buildCredentialsQuery();
    }

    /**
     * @return mixed
     */
    private static function response($response)
    {
        return $response;
    }
}
