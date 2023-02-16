<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\CancelService;

/** Class Cancel
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Cancel extends CancelRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return CancelService::create($credentials, $this);
    }
}
