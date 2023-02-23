<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class QueryPaymentOrderParsers
 */
class QueryPaymentOrderParsers extends Error implements Parser
{
    /**
     * @return mixed
     */
    public static function getPreApprovalCode(QueryPaymentOrder $queryPaymentOrder)
    {
        $queryPaymentOrder = $queryPaymentOrder->object_to_array($queryPaymentOrder);

        return $queryPaymentOrder['preApprovalCode'];
    }

    /**
     * @return string
     */
    public static function getData(QueryPaymentOrder $queryPaymentOrder)
    {
        $queryPaymentOrder = $queryPaymentOrder->object_to_array($queryPaymentOrder);
        unset($queryPaymentOrder['preApprovalCode']);

        return http_build_query($queryPaymentOrder);
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
