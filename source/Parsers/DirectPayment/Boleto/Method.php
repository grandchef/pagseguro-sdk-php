<?php

namespace PagSeguro\Parsers\DirectPayment\Boleto;

/** Trait Method
 */
trait Method
{
    /**
     * @return array
     */
    public static function getData($properties)
    {
        $data[$properties::DIRECT_PAYMENT_METHOD] = \PagSeguro\Enum\DirectPayment\Method::BOLETO;

        return $data;
    }
}
