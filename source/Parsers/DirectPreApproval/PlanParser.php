<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Plan;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class PlanParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class PlanParser extends Error implements Parser
{
    /**
     * @param Plan $data
     * @return array
     */
    public static function getData(Plan $data)
    {
        return $data->object_to_array($data);
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
