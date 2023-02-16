<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Status;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class StatusParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class StatusParser extends Error implements Parser
{
    /**
     * @param Status $status
     * @return mixed
     */
    public static function getPreApprovalCode(Status $status)
    {
        $status = $status->object_to_array($status);
        return $status['preApprovalCode'];
    }

    /**
     * @param Status $status
     * @return array|Status
     */
    public static function getData(Status $status)
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
