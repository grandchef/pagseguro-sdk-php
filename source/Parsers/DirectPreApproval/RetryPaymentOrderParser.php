<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\RetryPaymentOrder;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class RetryPaymentOrderParser
 */
class RetryPaymentOrderParser extends Error implements Parser
{
    /**
     * @return array
     */
    public static function getData(RetryPaymentOrder $retryPaymentOrder)
    {
        return $retryPaymentOrder->object_to_array($retryPaymentOrder);
    }

    /**
     * @return mixed
     */
    public static function success(Http $http)
    {
        $json = json_decode($http->getResponse());

        return $json;
    }

    /**
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        return parent::error($http);
    }
}
