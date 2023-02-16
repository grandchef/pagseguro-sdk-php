<?php

namespace PagSeguro\Parsers\Installment;

use PagSeguro\Domains\Responses\Installments;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 * @package PagSeguro\Parsers\Installment
 */
class Request extends Error implements Parser
{
    /**
     * @param Http $http
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
     * @param Http $http
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);
        return $error;
    }
}
