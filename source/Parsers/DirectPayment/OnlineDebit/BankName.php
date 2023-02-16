<?php

namespace PagSeguro\Parsers\DirectPayment\OnlineDebit;

use PagSeguro\Domains\Requests\Requests;

/** Trait BankName
 * @package PagSeguro\Parsers\DirectPayment\OnlineDebit
 */
trait BankName
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];

        if (!is_null($request->getBankName())) {
            $data[$properties::ONLINE_DEBIT_BANK_NAME] = $request->getBankName();
        }

        return $data;
    }
}
