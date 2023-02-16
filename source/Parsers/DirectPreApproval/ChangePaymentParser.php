<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class ChangePaymentParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class ChangePaymentParser extends Error implements Parser
{
    /**
     * @param ChangePayment $changePayment
     * @return mixed
     */
    public static function getPreApprovalCode(ChangePayment $changePayment)
    {
        $changePayment = $changePayment->object_to_array($changePayment);

        return $changePayment['preApprovalCode'];
    }

    /**
     * @param ChangePayment $changePayment
     * @return array|ChangePayment
     */
    public static function getData(ChangePayment $changePayment)
    {
        $changePayment = $changePayment->object_to_array($changePayment);
        unset($changePayment['preApprovalCode']);

        return $changePayment;
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
