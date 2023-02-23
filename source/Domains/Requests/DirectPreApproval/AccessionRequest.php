<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\PaymentMethod;
use PagSeguro\Domains\DirectPreApproval\Sender;
use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class AccessionRequest
 *
 */
class AccessionRequest
{
    use ParserTrait;

    private $plan;

    private $reference;

    /**
     * @var Sender
     */
    private $sender;

    /**
     * @var PaymentMethod
     */
    private $paymentMethod;

    /**
     * AccessionRequest constructor.
     */
    public function __construct()
    {
        $this->paymentMethod = new PaymentMethod();
        $this->sender = new Sender();
    }

    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return PaymentMethod
     */
    public function setPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @return Sender
     */
    public function setSender()
    {
        return $this->sender;
    }
}
