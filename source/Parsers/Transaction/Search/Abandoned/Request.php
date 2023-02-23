<?php

namespace PagSeguro\Parsers\Transaction\Search\Abandoned;

use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    /**
     * @return Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());

        $response = new Response();
        $response->setDate(current($xml->date))
            ->setTransactions(current($xml->transactions))
            ->setResultsInThisPage(current($xml->resultsInThisPage))
            ->setCurrentPage(current($xml->currentPage))
            ->setTotalPages(current($xml->totalPages));

        return $response;
    }

    /**
     * @return \PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);

        return $error;
    }
}
