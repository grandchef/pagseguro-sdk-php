<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Helpers;

/** Trait Currency
 * @package PagSeguro\Parsers
 */
trait Currency
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        // currency
        if (!is_null($request->getCurrency())) {
            $data[$properties::CURRENCY] = $request->getCurrency();
        }

        if (!is_null($request->getExtraAmount())) {
            $data[$properties::CURRENCY_EXTRA_AMOUNT] = Helpers\Currency::toDecimal($request->getExtraAmount());
        }

        return $data;
    }
}
