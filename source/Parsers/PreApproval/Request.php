<?php

namespace PagSeguro\Parsers\PreApproval;

use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\Basic;
use PagSeguro\Parsers\Currency;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Parsers\PreApproval;
use PagSeguro\Parsers\Sender;
use PagSeguro\Resources\Http;

/** Class Request
 * @package PagSeguro\Parsers\PreApproval
 */
class Request extends Error implements Parser
{
    use Basic;
    use Currency;
    use Sender;

    /**
     * @param Requests $request
     * @return array
     */
    public static function getData(Requests $request)
    {
        $data = [];
        $properties = new Current;
        return array_merge(
            $data,
            Basic::getData($request, $properties),
            Currency::getData($request, $properties),
            PreApproval::getData($request, $properties),
            Sender::getData($request, $properties)
        );
    }

    /**
     * @param Http $http
     * @return mixed|Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());
        return (new Response)->setCode(current($xml->code))
            ->setDate(current($xml->date));
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
