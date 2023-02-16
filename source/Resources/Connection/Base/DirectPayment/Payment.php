<?php

namespace PagSeguro\Resources\Connection\Base\DirectPayment;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Payment
{
    /**
     * @return string
     */
    public function buildDirectPaymentRequestUrl()
    {
        return Builder\DirectPayment\Payment::getRequestUrl();
    }
}
