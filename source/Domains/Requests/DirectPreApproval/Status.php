<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\StatusService;

/** Class Status
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Status extends StatusRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return StatusService::create($credentials, $this);
    }
}
