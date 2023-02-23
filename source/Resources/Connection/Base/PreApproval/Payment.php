<?php

namespace PagSeguro\Resources\Connection\Base\PreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
trait Payment
{
    /**
     * @return string
     */
    public function buildPreApprovalRequestUrl()
    {
        return Builder\PreApproval\Payment::getRequestUrl();
    }

    /**
     * @return string
     */
    public function buildPreApprovalResponseUrl()
    {
        return Builder\PreApproval\Payment::getResponseUrl();
    }
}
