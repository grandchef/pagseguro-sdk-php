<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Discount;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class DiscountParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class DiscountParser extends Error implements Parser
{
    /**
     * @param Discount $discount
     * @return mixed
     */
    public static function getPreApprovalCode(Discount $discount)
    {
        $discount = $discount->object_to_array($discount);
        unset($discount['status']);

        return $discount['preApprovalCode'];
    }

    /**
     * @param Discount $discount
     * @return array|Discount
     */
    public static function getData(Discount $discount)
    {
        $discount = $discount->object_to_array($discount);
        unset($discount['preApprovalCode']);

        return $discount;
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
