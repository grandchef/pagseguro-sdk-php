<?php

namespace PagSeguro\Parsers\DirectPayment\Boleto;

/** Trait Method
 * @package PagSeguro\Parsers\DirectPayment\Boleto
 */
trait Method
{
    /**
     * @param $properties
     * @return array
     */
    public static function getData($properties)
    {
        $data[$properties::DIRECT_PAYMENT_METHOD] = \PagSeguro\Enum\DirectPayment\Method::BOLETO;
        return $data;
    }
}
