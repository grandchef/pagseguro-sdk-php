<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Cancel;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class CancelParser
 */
class CancelParser extends Error implements Parser
{
    /**
     * @return mixed
     */
    public static function getPreApprovalCode(Cancel $status)
    {
        $status = $status->object_to_array($status);
        unset($status['status']);

        return $status['preApprovalCode'];
    }

    /**
     * @return array|Cancel
     */
    public static function getData(Cancel $status)
    {
        $status = $status->object_to_array($status);
        unset($status['preApprovalCode']);

        return $status;
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
