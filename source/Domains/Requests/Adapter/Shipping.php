<?php

namespace PagSeguro\Domains\Requests\Adapter;

use PagSeguro\Domains\Requests\Shipping\Address;
use PagSeguro\Domains\Requests\Shipping\AddressRequired;
use PagSeguro\Domains\Requests\Shipping\Cost;
use PagSeguro\Domains\Requests\Shipping\Type;

class Shipping
{
    use Address;
    use Cost;
    use Type;
    use AddressRequired;

    private $shipping;

    public function __construct($shipping)
    {
        $this->shipping = $shipping;
    }
}
