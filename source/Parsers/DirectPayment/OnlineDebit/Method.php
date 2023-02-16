<?php

namespace PagSeguro\Parsers\DirectPayment\OnlineDebit;

/** Trait Method
 * @package PagSeguro\Parsers\DirectPayment\OnlineDebit
 */
trait Method
{
    /**
     * @param $properties
     * @return array
     */
    public static function getData($properties)
    {
        $data[$properties::DIRECT_PAYMENT_METHOD] = \PagSeguro\Enum\DirectPayment\Method::ONLINE_DEBIT;
        return $data;
    }
}
