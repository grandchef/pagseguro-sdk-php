<?php

namespace PagSeguro\Parsers\Response;

/** Trait PaymentLink
 * @package PagSeguro\Parsers\Response
 */
trait PaymentLink
{
    private $paymentLink;

    public function getPaymentLink()
    {
        return $this->paymentLink;
    }

    public function setPaymentLink($paymentLink)
    {
        $this->paymentLink = $paymentLink;
        return $this;
    }
}
