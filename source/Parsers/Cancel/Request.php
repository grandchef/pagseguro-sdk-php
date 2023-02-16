<?php

namespace PagSeguro\Parsers\Cancel;

use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class Request
 * @package PagSeguro\Parsers\Cancel
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
        $result = new \PagSeguro\Parsers\Cancel\Response();
        $result->setResult(current($xml));
        return $result;
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
