<?php

namespace PagSeguro\Parsers\Response;

/** Trait PaymentMethod
 */
trait PaymentMethod
{
    private $paymentMethod;

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        if ($paymentMethod) {
            $payment = new \PagSeguro\Domains\Responses\PaymentMethod();
            $payment->setType(current($paymentMethod->type))->setCode(current($paymentMethod->code));
            $this->paymentMethod = $payment;
        }

        return $this;
    }
}
