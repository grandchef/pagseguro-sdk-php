<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class PaymentRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class RetryPaymentOrderRequest
{
    use ParserTrait;
    private $preApprovalCode;
    private $paymentOrderCode;

    /**
     * PaymentRequest constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $preApprovalCode
     */
    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }

    /**
     * @param mixed $paymentOrderCode
     */
    public function setPaymentOrderCode($paymentOrderCode)
    {
        $this->paymentOrderCode = $paymentOrderCode;
    }
}
