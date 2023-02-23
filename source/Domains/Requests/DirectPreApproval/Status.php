<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\StatusService;

/** Class Status
 *
 */
class Status extends StatusRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return StatusService::create($credentials, $this);
    }
}
