<?php

namespace PagSeguro\Parsers;

use PagSeguro\Resources\Http;

/** Class Error
 */
class Error
{
    /**
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
