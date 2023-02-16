<?php

namespace PagSeguro\Domains\Requests\PreApproval;

use PagSeguro\Domains\Requests\PreApproval\Charge\Request;

class Charge extends Request
{

    private $code;

    /**
     * @return string code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param $credentials
     * @return string
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\PreApproval\Charge::create($credentials, $this);
    }
}
