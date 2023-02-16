<?php

namespace PagSeguro\Parsers\DirectPayment\CreditCard;

use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Helpers\Characters;

/** Trait Holder
 * @package PagSeguro\Parsers\DirectPayment\CreditCard
 */
trait Holder
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        // sender
        if (!is_null($request->getHolder())) {
            if (!is_null($request->getHolder()->getName())) {
                $data[$properties::CREDIT_CARD_HOLDER_NAME] = $request->getHolder()->getName();
            }
            if (!is_null($request->getHolder()->getBirthDate())) {
                $data[$properties::CREDIT_CARD_HOLDER_BIRTH_DATE] = $request->getHolder()->getBirthDate();
            }
            // phone
            if (!is_null($request->getHolder()->getPhone())) {
                $data = array_merge($data, self::holderPhone($request, $properties));
            }
            // documents
            if (!is_null($request->getHolder()->getDocuments())) {
                $data = array_merge($data, self::holderDocument($request, $properties));
            }
        }
        return $data;
    }

    /**
     * @param $request
     * @param $properties
     * @return array
     */
    private static function holderPhone($request, $properties)
    {
        $data = [];
        if (!is_null($request->getHolder()->getPhone()->getAreaCode())) {
            $data[$properties::CREDIT_CARD_HOLDER_AREA_CODE] = $request->getHolder()->getPhone()->getAreaCode();
        }
        if (!is_null($request->getHolder()->getPhone()->getNumber())) {
            $data[$properties::CREDIT_CARD_HOLDER_PHONE] = $request->getHolder()->getPhone()->getNumber();
        }
        return $data;
    }

    /**
     * @param $payment
     * @param $properties
     * @return array
     */
    private static function holderDocument($payment, $properties)
    {
        $data = [];
        $document = $payment->getHolder()->getDocuments();

        if (!is_null($document)) {
            $data[$properties::CREDIT_CARD_HOLDER_CPF] = Characters::hasSpecialChars($document->getIdentifier());
        }

        return $data;
    }
}
