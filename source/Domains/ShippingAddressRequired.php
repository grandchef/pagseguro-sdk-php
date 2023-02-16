<?php

namespace PagSeguro\Domains;

/** Class ShippingAddressRequired
 * @package PagSeguro\Domains
 */
class ShippingAddressRequired
{

    /**
     * @var
     */
    private $addressRequired;

    /**
     * @return string
     */
    public function getAddressRequired()
    {
        return $this->addressRequired;
    }

    /**
     * @param string $addressRequired
     */
    public function setAddressRequired($addressRequired)
    {
        $this->addressRequired = $addressRequired;
    }
}
