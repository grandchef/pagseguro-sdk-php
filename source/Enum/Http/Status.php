<?php

namespace PagSeguro\Enum\Http;

use PagSeguro\Enum\Enum;

/** Class Status
 * @package PagSeguro\Enum\Http
 */
class Status extends Enum
{
    /**
     * Http Method 200 - OK.
     */
    const OK = 200;
    /**
     * Http Method 400 - Bad request.
     */
    const BAD_REQUEST = 400;
    /**
     * Http Method 401 - Unauthorized.
     */
    const UNAUTHORIZED = 401;
    /**
     * Http Method 403 - Forbidden.
     */
    const FORBIDDEN = 403;
    /**
     * Http Method 404 - Not found.
     */
    const NOT_FOUND = 404;
    /**
     * Http Method 500 - Internal server error.
     */
    const INTERNAL_SERVER_ERROR = 500;
    /**
     * Http Method 502 - Bad gateway.
     */
    const BAD_GATEWAY = 502;
    /**
     * Http Method 204 - No Content.
     */
    const NO_CONTENT = 204;
}
