<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\Application\Authorization\Request;

/** Class Payment
 *
 */
class Authorization extends Request
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\Application\Authorization::create($credentials, $this);
    }
}
