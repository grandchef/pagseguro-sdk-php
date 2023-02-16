<?php

namespace PagSeguro\Parsers\DirectPayment\CreditCard;

use PagSeguro\Domains\Requests\Requests;

/** Trait Token
 * @package PagSeguro\Parsers\DirectPayment\CreditCard
 */
trait Token
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        // quantity
        if (!is_null($request->getToken())) {
            $data[$properties::CREDIT_CARD_TOKEN] = $request->getToken();
        }

        return $data;
    }
}
