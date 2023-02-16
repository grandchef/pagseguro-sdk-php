<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Cancel;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class CancelParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class CancelParser extends Error implements Parser
{
    /**
     * @param Cancel $status
     * @return mixed
     */
    public static function getPreApprovalCode(Cancel $status)
    {
        $status = $status->object_to_array($status);
        unset($status['status']);
        return $status['preApprovalCode'];
    }

    /**
     * @param Cancel $status
     * @return array|Cancel
     */
    public static function getData(Cancel $status)
    {
        $status = $status->object_to_array($status);
        unset($status['preApprovalCode']);
        return $status;
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
