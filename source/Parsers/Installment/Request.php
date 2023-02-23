<?php

namespace PagSeguro\Parsers\Installment;

use PagSeguro\Domains\Responses\Installments;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    /**
     * @return mixed|Installments
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());
        $installments = new Installments();
        $installments->setInstallments(current($xml));

        return $installments;
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
