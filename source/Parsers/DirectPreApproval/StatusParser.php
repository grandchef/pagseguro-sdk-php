<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Status;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class StatusParser
 */
class StatusParser extends Error implements Parser
{
    /**
     * @return mixed
     */
    public static function getPreApprovalCode(Status $status)
    {
        $status = $status->object_to_array($status);

        return $status['preApprovalCode'];
    }

    /**
     * @return array|Status
     */
    public static function getData(Status $status)
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
