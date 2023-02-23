<?php

namespace PagSeguro\Resources\Factory\Shipping;

use PagSeguro\Domains\ShippingCost;

/** Class Shipping
 */
class Cost
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

    public function instance(ShippingCost $cost)
    {
        return $this->shipping->setCost($cost);
    }

    public function withParameters($cost)
    {
        $shipping = new ShippingCost();
        $this->shipping->setCost(
            $shipping->setCost($cost)
        );

        return $this->shipping;
    }
}
