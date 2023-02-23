<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

trait Cancel
{
    public function buildDirectPreApprovalCancelRequestUrl($preApprovalCode)
    {
        return Builder\DirectPreApproval\Cancel::getCancelUrl().'/'.$preApprovalCode.'/cancel';
    }
}
