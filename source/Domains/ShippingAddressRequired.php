<?php

namespace PagSeguro\Domains;

/** Class ShippingAddressRequired
 */
class ShippingAddressRequired
{
    private $addressRequired;

    /**
     * @return string
     */
    public function getAddressRequired()
    {
        return $this->addressRequired;
    }

    /**
     * @param  string  $addressRequired
     */
    public function setAddressRequired($addressRequired)
    {
        $this->addressRequired = $addressRequired;
    }
}
