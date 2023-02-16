<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Services\DirectPreApproval\AccessionService;

/** Class Accession
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class Accession extends AccessionRequest
{
    /**
     * @param $credentials
     *
     * @return mixed
     */
    public function register($credentials)
    {
        return AccessionService::create($credentials, $this);
    }
}
