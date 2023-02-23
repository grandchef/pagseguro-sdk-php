<?php

namespace PagSeguro\Resources\Factory\Shipping;

use PagSeguro\Domains\ShippingAddressRequired;

/** Class Shipping
 */
class AddressRequired
{
    /**
     * @var \PagSeguro\Domains\Shipping
     */
    private $shipping;

    /**
     * AddressRequired constructor.
     */
    public function __construct($shipping)
    {
        $this->shipping = $shipping;
    }

    public function instance(ShippingAddressRequired $addressRequired)
    {
        return $this->shipping->setAddressRequired($addressRequired);
    }

    public function withParameters($addressRequired)
    {
        $shipping = new ShippingAddressRequired();
        $shipping->setAddressRequired($addressRequired);
        $this->shipping->setAddressRequired(
            $shipping
        );

        return $this->shipping;
    }
}
