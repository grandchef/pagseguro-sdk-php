<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Query;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class QueryParsers
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class QueryParsers extends Error implements Parser
{
    /**
     * @param Query $directPreApproval
     * @return string
     */
    public static function getData(Query $directPreApproval)
    {
        return http_build_query($directPreApproval);
    }

    /**
     * @param Http $http
     * @return mixed
     */
    public static function success(Http $http)
    {
        $json = json_decode($http->getResponse());
        return $json;
    }

    /**
     * @param Http $http
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        return parent::error($http);
    }
}
