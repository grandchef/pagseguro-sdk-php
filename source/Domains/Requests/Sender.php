<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Helpers\InitializeObject;

/** Class Sender
 */
trait Sender
{
    private $sender;

    /**
     * @return Adapter\Sender
     */
    public function setSender()
    {
        $this->sender = InitializeObject::initialize($this->sender, '\PagSeguro\Domains\Sender');

        return new \PagSeguro\Domains\Requests\Adapter\Sender($this->sender);
    }

    /**
     * @return \PagSeguro\Domains\Sender
     */
    public function getSender()
    {
        return $this->sender;
    }
}
