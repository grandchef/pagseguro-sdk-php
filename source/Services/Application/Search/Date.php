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
class Date
{

    /**
     * @param \PagSeguro\Domains\Account\Credentials $credentials
     * @param $options
     * @return string
     * @throws \Exception
     */
    public static function search(
        Credentials $credentials,
        array $options
    ) {
        try {
            Logger::info("Begin", ['service' => 'Application.Search.Date']);
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf(
                    "GET: %s",
                    self::request($connection, $options)
                ),
                ['service' => 'Application.Search.Date']
            );
            $http->get(
                self::request($connection, $options),
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
                ['service' => 'Application.Search.Date']
            );
            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'Application.Search.Date']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @param $params
     * @return string
     */
    private static function request(Connection\Data $connection, $params)
    {
        return sprintf(
            "%s/?%s&%s%s%s%s",
            $connection->buildAuthorizationSearchRequestUrl(),
            $connection->buildCredentialsQuery(),
            sprintf("&%s=%s", Current::SEARCH_INITIAL_DATE, $params["initial_date"]),
            !isset($params["final_date"]) ? '' : sprintf("&%s=%s", Current::SEARCH_FINAL_DATE, $params["final_date"]),
            !isset($params["max_per_page"]) ? '' :
                sprintf("&%s=%s", Current::SEARCH_MAX_RESULTS_PER_PAGE, $params["max_per_page"]),
            !isset($params["page"]) ? '' : sprintf("&%s=%s", Current::SEARCH_PAGE, $params["page"])
        );
    }
}
