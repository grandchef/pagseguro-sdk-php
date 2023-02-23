<?php

namespace PagSeguro\Services\PreApproval\Search;

use PagSeguro\Domains\Account\Credentials;
use PagSeguro\Parsers\PreApproval\Search\Date\Request;
use PagSeguro\Resources\Connection;
use PagSeguro\Resources\Http;
use PagSeguro\Resources\Log\Logger;
use PagSeguro\Resources\Responsibility;

/** Class Payment
 */
class Interval
{
    /**
     * @param $code
     * @return string
     *
     * @throws \Exception
     */
    public static function search(Credentials $credentials, $days)
    {
        Logger::info('Begin', ['service' => 'PreApproval.Search.Interval']);

        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf('GET: %s', self::request($connection, $days)),
                ['service' => 'PreApproval.Search.Interval']
            );
            $http->get(
                self::request($connection, $days),
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
                ['service' => 'PreApproval.Search.Interval']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'PreApproval.Search.Interval']);
            throw $exception;
        }
    }

    /**
     * @return string
     */
    private static function request(Connection\Data $connection, $days)
    {
        return sprintf(
            '%s/?%s&interval=%s',
            $connection->buildNotificationPreApprovalRequestUrl(),
            $connection->buildCredentialsQuery(),
            $days
        );
    }
}
