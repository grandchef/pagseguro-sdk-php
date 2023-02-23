<?php

namespace PagSeguro\Parsers\DirectPayment\OnlineDebit;

use PagSeguro\Domains\Requests\Requests;

/** Trait BankName
 */
trait BankName
{
    /**
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];

        if (! is_null($request->getBankName())) {
            $data[$properties::ONLINE_DEBIT_BANK_NAME] = $request->getBankName();
        }

        return $data;
    }
}
