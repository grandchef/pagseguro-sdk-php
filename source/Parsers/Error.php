<?php

namespace PagSeguro\Parsers;

use PagSeguro\Resources\Http;

/** Class Error
 * @package PagSeguro\Parsers
 */
class Error
{
    /**
     * @param Http $http
     * @return \PagSeguro\Domains\Error
     */
    protected static function error(Http $http)
    {
        $error = new \PagSeguro\Domains\Error;
        $error->setCode($http->getStatus())
            ->setMessage($http->getResponse());
        return $error;
    }
}
