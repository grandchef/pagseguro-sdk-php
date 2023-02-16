<?php

namespace PagSeguro\Domains\PreApproval;

/** Class Sender
 * @package PagSeguro\Domains
 */
class Sender extends \PagSeguro\Domains\Sender
{

    /**
     * @var
     */
    private $address;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return Sender
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
