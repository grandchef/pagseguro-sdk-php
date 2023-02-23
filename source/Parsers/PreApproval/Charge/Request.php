<?php

namespace PagSeguro\Parsers\PreApproval\Charge;

use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\Basic;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Item;
use PagSeguro\Parsers\Parser;
use PagSeguro\Parsers\PreApproval\Response;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    use Basic;
    use Item;

    /**
     * @return array
     */
    public static function getData(Requests $request)
    {
        $data = [];
        $properties = new Current;
        if (! is_null($request->getCode())) {
            $data[$properties::PRE_APPROVAL_CODE] = $request->getCode();
        }

        return array_merge(
            $data,
            Basic::getData($request, $properties),
            Item::getData($request, $properties)
        );
    }

    /**
     * @return Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());

        return (new Response)->setCode(current($xml->transactionCode))
            ->setDate(current($xml->date));
    }

    /**
     * @return \PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);

        return $error;
    }
}
