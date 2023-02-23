<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class QueryNotificationParser
 */
class QueryNotificationParser extends Error implements Parser
{
    /**
     * @return mixed
     */
    public static function getNotificationCode(QueryNotification $queryNotification)
    {
        $queryNotification = $queryNotification->object_to_array($queryNotification);

        return $queryNotification['notificationCode'];
    }

    /**
     * @return string
     */
    public static function getData(QueryNotification $directPreApproval)
    {
        $directPreApproval = $directPreApproval->object_to_array($directPreApproval);
        unset($directPreApproval['notificationCode']);

        return http_build_query($directPreApproval);
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
