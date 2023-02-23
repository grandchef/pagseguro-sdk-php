<?php

namespace PagSeguro\Parsers\DirectPayment\CreditCard;

/** Trait Method
 */
trait Method
{
    /**
     * @return array
     */
    public static function getData($properties)
    {
        $data[$properties::DIRECT_PAYMENT_METHOD] = \PagSeguro\Enum\DirectPayment\Method::CREDIT_CARD;

        return $data;
    }
}
