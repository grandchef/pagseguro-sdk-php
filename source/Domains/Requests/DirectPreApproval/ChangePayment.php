<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\ChangePaymentService;

/** Class ChangePayment
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class ChangePayment extends ChangePaymentRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return ChangePaymentService::create($credentials, $this);
    }
}
