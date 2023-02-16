<?php

namespace PagSeguro\Resources\Connection\Base\PreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
 */
trait Cancel
{
    /**
     * @return string
     */
    public function buildPreApprovalCancelUrl()
    {
        return Builder\PreApproval\Cancel::getCancelUrl();
    }
}
