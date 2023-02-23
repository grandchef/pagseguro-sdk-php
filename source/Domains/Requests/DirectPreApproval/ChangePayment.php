<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\ChangePaymentService;

/** Class ChangePayment
 *
 */
class ChangePayment extends ChangePaymentRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return ChangePaymentService::create($credentials, $this);
    }
}
