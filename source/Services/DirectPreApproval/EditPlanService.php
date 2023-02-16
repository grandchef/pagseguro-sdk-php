<?php

namespace PagSeguro\Services\DirectPreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Domains\Requests\DirectPreApproval\EditPlan;
use PagSeguro\Parsers\DirectPreApproval\EditPlanParser;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class EditPlanService
 *
 * @package PagSeguro\Services\DirectPreApproval
 */
class EditPlanService
{
    /**
     * @param Credentials $credentials
     * @param EditPlan $editPlan
     *
     * @return mixed
     * @throws \Exception
     */
    public static function edit(Credentials $credentials, EditPlan $editPlan)
    {
        Logger::info("Begin", ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');

            Logger::info(sprintf("PUT: %s",
                self::request($connection, EditPlanParser::getPreApprovalRequestCode($editPlan))),
                ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(EditPlanParser::getData($editPlan))
                ),
                ['service' => 'DirectPreApproval']
            );

            $http->put(
                self::request($connection, EditPlanParser::getPreApprovalRequestCode($editPlan)),
                EditPlanParser::getData($editPlan),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new EditPlanParser
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
        return $connection->buildDirectPreApprovalEditPlanRequestUrl($preApprovalCode) . "?" . $connection->buildCredentialsQuery();
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