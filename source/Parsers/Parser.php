<?php

namespace PagSeguro\Parsers;

use PagSeguro\Resources\Http;

/** Interface Parser
 * @package PagSeguro\Parsers
 */
interface Parser
{
    /**
     * @param Http $http
     * @return mixed
     */
    public static function success(Http $http);

    /**
     * @param Http $http
     * @return mixed
     */
    public static function error(Http $http);
}
