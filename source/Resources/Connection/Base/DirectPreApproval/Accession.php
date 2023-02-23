<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
trait Accession
{
    /**
     * @return string
     */
    public function buildDirectPreApprovalAccessionRequestUrl()
    {
        return Builder\DirectPreApproval\Accession::getAccessionUrl();
    }
}
