<?php

namespace PagSeguro\Parsers\PreApproval\Search\Date;

use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Parsers\PreApproval\Search\Result;
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
        $response = new Result();
        $response->setDate(current($xml->date))
            ->setPreApprovals(current($xml->preApprovals))
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
