<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
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
