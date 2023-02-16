<?php

namespace PagSeguro\Parsers\Authorization\Notification;

use PagSeguro\Parsers\Authorization\Search\Response;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 * @package PagSeguro\Parsers\Authorization\Notification
 */
class Request extends Error implements Parser
{
    /**
     * @param Http $http
     * @return mixed|Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());

        $response = new Response();
        $response->setCode(current($xml->code))
            ->setCreationDate(current($xml->creationDate))
            ->setReference(current($xml->reference))
            ->setAccount(current($xml->account))
            ->setPermissions(current($xml->permissions));
        return $response;
    }

    /**
     * @param Http $http
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);
        return $error;
    }
}
