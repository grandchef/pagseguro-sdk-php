<?php

namespace PagSeguro\Parsers\Response;

/** Trait PaymentMethod
 * @package PagSeguro\Parsers\Response
 */
trait PaymentMethod
{
    /**
     * @var
     */
    private $paymentMethod;

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param $paymentMethod
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
