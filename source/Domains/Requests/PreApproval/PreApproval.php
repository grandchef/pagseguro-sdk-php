<?php

namespace PagSeguro\Domains\Requests\PreApproval;

use PagSeguro\Helpers\InitializeObject;

trait PreApproval
{
    private $preApproval;

    /**
     * @return \PagSeguro\Domains\PreApproval
     */
    public function getPreApproval()
    {
        return $this->preApproval;
    }

    /**
     * @return \PagSeguro\Domains\PreApproval
     */
    public function setPreApproval()
    {
        $this->preApproval = InitializeObject::initialize($this->preApproval, '\PagSeguro\Domains\PreApproval');
        return $this->preApproval;
    }
}
