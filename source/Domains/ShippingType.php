<?php

namespace PagSeguro\Domains;

/** Class ShippingType
 * @package PagSeguro\Domains
 */
class ShippingType
{

    /**
     * @var
     */
    private $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
