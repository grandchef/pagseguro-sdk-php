<?php

namespace PagSeguro\Parsers\Response;

use PagSeguro\Resources\Factory\Shipping\Address;
use PagSeguro\Resources\Factory\Shipping\Cost;
use PagSeguro\Resources\Factory\Shipping\Type;

/** Trait Shipping
 * @package PagSeguro\Parsers\Response
 */
trait Shipping
{
    /**
     * @var
     */
    private $shipping;

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     * @return Response
     */
    public function setShipping($shipping)
    {
        if (current($shipping) !== false) {
            $shippingClass = new \PagSeguro\Domains\Shipping();

            $shippingAddress = new Address($shippingClass);

            $shippingAddress->withParameters(
                current($shipping->address->street),
                current($shipping->address->number),
                current($shipping->address->district),
                current($shipping->address->postalCode),
                current($shipping->address->city),
                current($shipping->address->state),
                current($shipping->address->country),
                current($shipping->address->complement)
            );

            $shippingType = new Type($shippingClass);
            $shippingType->withParameters(current($shipping->type));

            $shippingCost = new Cost($shippingClass);
            $shippingCost->withParameters(current($shipping->cost));
            $this->shipping = $shippingClass;
        }
        return $this;
    }
}
