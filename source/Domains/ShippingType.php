<?php

namespace PagSeguro\Domains;

/** Class ShippingType
 */
class ShippingType
{
    private $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  string  $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
