<?php

namespace PagSeguro\Resources\Connection\Base\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Services\Connection\Base
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
