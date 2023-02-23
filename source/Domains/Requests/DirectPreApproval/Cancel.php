<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\CancelService;

/** Class Cancel
 *
 */
class Cancel extends CancelRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return CancelService::create($credentials, $this);
    }
}
