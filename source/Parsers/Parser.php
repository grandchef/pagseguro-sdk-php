<?php

namespace PagSeguro\Parsers;

use PagSeguro\Resources\Http;

/** Interface Parser
 */
interface Parser
{
    /**
     * @return mixed
     */
    public static function success(Http $http);

    /**
     * @return mixed
     */
    public static function error(Http $http);
}
