<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\AccessionService;

/** Class Accession
 *
 */
class Accession extends AccessionRequest
{
    /**
     * @return mixed
     */
    public function register($credentials)
    {
        return AccessionService::create($credentials, $this);
    }
}
