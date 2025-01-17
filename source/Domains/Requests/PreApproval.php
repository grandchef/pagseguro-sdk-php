<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\PreApproval\Request;

class PreApproval extends Request
{
    /**
     * @return string
     *
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\PreApproval\Payment::create($credentials, $this);
    }
}
