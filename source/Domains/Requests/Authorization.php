<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\Application\Authorization\Request;

/** Class Payment
 *
 * @package PagSeguro\Domains\Requests
 */
class Authorization extends Request
{
    /**
     * @param $credentials
     *
     * @return string
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\Application\Authorization::create($credentials, $this);
    }
}
