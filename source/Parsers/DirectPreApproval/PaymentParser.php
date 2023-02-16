<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Payment;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class PaymentParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class PaymentParser extends Error implements Parser
{
    /**
     * @param Payment $directPreApproval
     * @return array
     */
    public static function getData(Payment $directPreApproval)
    {
        return $directPreApproval->object_to_array($directPreApproval);
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
