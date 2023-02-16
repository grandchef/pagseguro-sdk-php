<?php

namespace PagSeguro\Domains;

class Shipping
{

    /***
     * Shipping address
     * @see Address
     */
    private $address;
    /***
     * Shipping type. See the ShippingType class for a list of known shipping types.
     * @see ShippingType
     */
    private $type;
    /***
     * Shipping cost.
     */
    private $cost;
    /***
     * Shipping address required.
     */
    private $addressRequired;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Shipping
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param string $cost
     * @return Shipping
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return ShippingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ShippingType $type
     * @return Shipping
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return ShippingAddressRequired
     */
    public function getAddressRequired()
    {
        return $this->addressRequired;
    }

    /**
     * @param ShippingAddressRequired $addressRequired
     * @return Shipping
     */
    public function setAddressRequired($addressRequired)
    {
        $this->addressRequired = $addressRequired;
        return $this;
    }
}
