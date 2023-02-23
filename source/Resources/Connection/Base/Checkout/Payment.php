<?php

namespace PagSeguro\Resources\Connection\Base\Checkout;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
trait Payment
{
    /**
     * @return string
     */
    public function buildPaymentRequestUrl()
    {
        return Builder\Checkout\Payment::getRequestUrl();
    }

    /**
     * @return string
     */
    public function buildPaymentResponseUrl()
    {
        return Builder\Checkout\Payment::getResponseUrl();
    }
}
