<?php

namespace PagSeguro\Services\PreApproval\Search;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\PreApproval\Search\Date\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Date
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public static function search(
        Credentials $credentials,
        array $options
    ) {
        Logger::info('Begin', ['service' => 'PreApproval.Search.Date']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf('GET: %s', self::request($connection, $options)),
                ['service' => 'PreApproval.Search.Date']
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
                    'Date: %s, Results in this page: %s, Total pages: %s',
                    $response->getDate(),
                    $response->getResultsInThisPage(),
                    $response->getTotalPages()
                ),
                ['service' => 'Transactions.Search.Date']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval.Search.Date']);
            throw $exception;
        }
    }

    /**
     * @return string
     */
    private static function request(Connection\Data $connection, $params)
    {
        return sprintf(
            '%s/?%s%s%s%s%s',
            $connection->buildPreApprovalSearchRequestUrl(),
            $connection->buildCredentialsQuery(),
            sprintf('&%s=%s', Current::SEARCH_INITIAL_DATE, $params['initial_date']),
            ! isset($params['final_date']) ? '' : sprintf('&%s=%s', Current::SEARCH_FINAL_DATE, $params['final_date']),
            ! isset($params['max_per_page']) ? '' :
                sprintf('&%s=%s', Current::SEARCH_MAX_RESULTS_PER_PAGE, $params['max_per_page']),
            ! isset($params['page']) ? '' : sprintf('&%s=%s', Current::SEARCH_PAGE, $params['page'])
        );
    }
}
