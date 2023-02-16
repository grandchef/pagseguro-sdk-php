<?php

namespace PagSeguro\Services\PreApproval;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Helpers\Crypto;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Parsers\PreApproval\Charge\Request;
use PagSeguro\Resources\Responsibility;

class Charge
{
    public static function create(Credentials $credentials, \PagSeguro\Domains\Requests\PreApproval\Charge $charge)
    {
        Logger::info("Begin", ['service' => 'PreApproval.Charge']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(sprintf("POST: %s", self::request($connection)), ['service' => 'PreApproval.Charge']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(Crypto::encrypt(Request::getData($charge)))
                ),
                ['service' => 'PreApproval.Charge']
            );
            $http->post(
                self::request($connection),
                Request::getData($charge),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            return Responsibility::http(
                $http,
                new Request
            );
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval.Charge']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildPreApprovalChargeRequestUrl() . "?" . $connection->buildCredentialsQuery();
    }
}
