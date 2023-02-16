<?php

namespace PagSeguro\Services\Application\Search;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\Authorization\Search\Date\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 * @package PagSeguro\Services\Checkout
 */
class Reference
{

    /**
     * @param \PagSeguro\Domains\Account\Credentials $credentials
     * @param $reference
     * @param $options
     * @return string
     * @throws \Exception
     */
    public static function search(
        Credentials $credentials,
        $reference,
        array $options
    ) {
        Logger::info("Begin", ['service' => 'Application.Search.Reference']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf(
                    "GET: %s",
                    self::request($connection, $reference, $options)
                ),
                ['service' => 'Application.Search.Reference']
            );
            $http->get(
                self::request($connection, $reference, $options),
                20,
                \PagSeguro\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );
            Logger::info(
                sprintf(
                    "Date: %s, Results in this page: %s, Total pages: %s",
                    $response->getDate(),
                    $response->getResultsInThisPage(),
                    $response->getTotalPages()
                ),
                ['service' => 'Application.Search.Reference']
            );
            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Application.Search.Reference']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @param $reference
     * @param $params
     * @return string
     */
    private static function request(Connection\Data $connection, $reference, $params)
    {
        return sprintf(
            "%s/?%s&reference=%s%s%s%s%s",
            $connection->buildAuthorizationSearchRequestUrl(),
            $connection->buildCredentialsQuery(),
            $reference,
            sprintf("&%s=%s", Current::SEARCH_INITIAL_DATE, $params["initial_date"]),
            !isset($params["final_date"]) ? '' : sprintf("&%s=%s", Current::SEARCH_FINAL_DATE, $params["final_date"]),
            !isset($params["max_per_page"]) ? '' :
                sprintf("&%s=%s", Current::SEARCH_MAX_RESULTS_PER_PAGE, $params["max_per_page"]),
            !isset($params["page"]) ? '' : sprintf("&%s=%s", Current::SEARCH_PAGE, $params["page"])
        );
    }
}
