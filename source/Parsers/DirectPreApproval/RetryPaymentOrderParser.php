<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class RetryPaymentOrderParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class RetryPaymentOrderParser extends Error implements Parser
{
    /**
     * @param RetryPaymentOrder $retryPaymentOrder
     * @return array
     */
    public static function getData(RetryPaymentOrder $retryPaymentOrder)
    {
        return $retryPaymentOrder->object_to_array($retryPaymentOrder);
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
