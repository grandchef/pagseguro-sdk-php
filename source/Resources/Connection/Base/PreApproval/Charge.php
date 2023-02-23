<?php

namespace PagSeguro\Resources\Connection\Base\PreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
trait Charge
{
    /**
     * @return string
     */
    public function buildPreApprovalChargeRequestUrl()
    {
        return Builder\PreApproval\Charge::getRequestUrl();
    }
}
