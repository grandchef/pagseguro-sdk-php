<?php

namespace PagSeguro\Resources\Factory\Shipping;

use PagSeguro\Domains\ShippingType;

/** Class Shipping
 * @package PagSeguro\Resources\Factory\Request
 */
class Type
{

    /**
     * @var \PagSeguro\Domains\Shipping
     */
    private $shipping;

    /**
     * Shipping constructor.
     */
    public function __construct($shipping)
    {
        $this->shipping = $shipping;
    }

    public function instance(ShippingType $type)
    {
        return $this->shipping->setType($type);
    }

    public function withParameters($type)
    {
        $shipping = new ShippingType();
        $shipping->setType($type);
        $this->shipping->setType(
            $shipping
        );
        return $this->shipping;
    }
}
