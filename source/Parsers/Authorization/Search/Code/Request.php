<?php

namespace PagSeguro\Parsers\Authorization\Search\Code;

use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\Authorization\Search\Response;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 * @package PagSeguro\Parsers\Authorization\Search\Code
 */
class Request extends Error implements Parser
{
    /**
     * @param $code
     * @return array
     */
    public static function getData($code)
    {
        $data = [];
        $properties = new Current;

        if (!is_null($code)) {
            $data[$properties::TRANSACTION_CODE] = $code;
        }
        return $data;
    }

    /**
     * @param \PagSeguro\Resources\Http $http
     * @return Response
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
     * @param \PagSeguro\Resources\Http $http
     * @return \PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);
        return $error;
    }
}
