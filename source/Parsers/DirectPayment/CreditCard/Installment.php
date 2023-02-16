<?php

namespace PagSeguro\Parsers\DirectPayment\CreditCard;

use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Helpers\Currency;

/** Trait Installment
 * @package PagSeguro\Parsers\DirectPayment\CreditCard
 */
trait Installment
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        $installment = current($request->getInstallment());

        // quantity
        if (!is_null($installment->getQuantity())) {
            $data[$properties::INSTALLMENT_QUANTITY] = $installment->getQuantity();
        }
        // value
        if (!is_null($installment->getValue())) {
            $data[$properties::INSTALLMENT_VALUE] = Currency::toDecimal($installment->getValue());
        }
        // setNoInterestInstallmentQuantity
        if (!is_null($installment->getNoInterestInstallmentQuantity())) {
            $data[$properties::INSTALLMENT_NO_INTEREST_INSTALLMENT_QUANTITY] = (int) $installment->getNoInterestInstallmentQuantity();
        }

        return $data;
    }
}
