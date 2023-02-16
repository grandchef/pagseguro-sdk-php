<?php

namespace PagSeguro\Resources\Connection\Base\PreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
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
