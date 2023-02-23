<?php

namespace PagSeguro\Domains;

/** Class ShippingCost
 */
class ShippingCost
{
    private $cost;

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param  mixed  $cost
     * @return ShippingCost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }
}
