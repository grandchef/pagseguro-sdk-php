<?php

namespace PagSeguro\Parsers\Authorization\Search\Date;

use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    /**
     * @return mixed|Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());
        $response = new Response();
        $response->setDate(current($xml->date))
            ->setAuthorizations(current($xml->authorizations))
            ->setResultsInThisPage(current($xml->resultsInThisPage))
            ->setCurrentPage(current($xml->currentPage))
            ->setTotalPages(current($xml->totalPages));

        return $response;
    }

    /**
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);

        return $error;
    }
}
