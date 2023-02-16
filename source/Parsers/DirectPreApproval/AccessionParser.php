<?php

namespace PagSeguro\Parsers\DirectPreApproval;

use PagSeguro\Domains\Requests\DirectPreApproval\Accession;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Resources\Http;

/** Class AccessionParser
 * @package PagSeguro\Parsers\DirectPreApproval
 */
class AccessionParser extends Error implements Parser
{
    /**
     * @param Accession $directPreApproval
     * @return array
     */
    public static function getData(Accession $directPreApproval)
    {
        return $directPreApproval->object_to_array($directPreApproval);
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
