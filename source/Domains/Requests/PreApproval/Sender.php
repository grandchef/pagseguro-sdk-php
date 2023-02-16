<?php

namespace PagSeguro\Domains\Requests\PreApproval;

use PagSeguro\Helpers\InitializeObject;

/** Class Sender
 * @package PagSeguro\Domains\Requests
 */
trait Sender
{

    /**
     * @var
     */
    private $sender;

    /**
     * @return \PagSeguro\Domains\Requests\Adapter\Sender
     */
    public function setSender()
    {
        $this->sender = InitializeObject::initialize($this->sender, '\PagSeguro\Domains\PreApproval\Sender');
        return new \PagSeguro\Domains\Requests\Adapter\PreApproval\Sender($this->sender);
    }

    /**
     * @return \PagSeguro\Domains\PreApproval\Sender
     */
    public function getSender()
    {
        return $this->sender;
    }
}
