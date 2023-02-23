<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Discount;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class DiscountParser
 */
class DiscountParser extends Error implements Parser
{
    /**
     * @return mixed
     */
    public static function getPreApprovalCode(Discount $discount)
    {
        $discount = $discount->object_to_array($discount);
        unset($discount['status']);

        return $discount['preApprovalCode'];
    }

    /**
     * @return array|Discount
     */
    public static function getData(Discount $discount)
    {
        $discount = $discount->object_to_array($discount);
        unset($discount['preApprovalCode']);

        return $discount;
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
