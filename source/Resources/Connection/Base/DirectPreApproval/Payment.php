<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Payment
{
    /**
     * @return string
     */
    public function buildDirectPreApprovalPaymentRequestUrl()
    {
        return Builder\DirectPreApproval\Payment::getPaymentUrl();
    }
}
