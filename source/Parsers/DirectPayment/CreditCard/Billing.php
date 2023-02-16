<?php

namespace PagSeguro\Parsers\DirectPayment\CreditCard;

use PagSeguro\Domains\Requests\Requests;

/** Trait Billing
 * @package PagSeguro\Parsers\DirectPayment\CreditCard
 */
trait Billing
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        // Billing data
        if (!is_null($request->getBilling())) {
            if (!is_null($request->getBilling()->getAddress())) {
                $data = array_merge($data, self::address($request->getBilling()->getAddress(), $properties));
            }
        }
        return $data;
    }

    /**
     * @param $request
     * @param $properties
     * @return array
     */
    private static function address($request, $properties)
    {
        $data = [];

        if (!is_null($request->getStreet())) {
            $data[$properties::BILLING_ADDRESS_STREET] = $request->getStreet();
        }
        if (!is_null($request->getNumber())) {
            $data[$properties::BILLING_ADDRESS_NUMBER] = $request->getNumber();
        }
        if (!is_null($request->getComplement())) {
            $data[$properties::BILLING_ADDRESS_COMPLEMENT] = $request->getComplement();
        }
        if (!is_null($request->getCity())) {
            $data[$properties::BILLING_ADDRESS_CITY] = $request->getCity();
        }
        if (!is_null($request->getState())) {
            $data[$properties::BILLING_ADDRESS_STATE] = $request->getState();
        }
        if (!is_null($request->getDistrict())) {
            $data[$properties::BILLING_ADDRESS_DISTRICT] = $request->getDistrict();
        }
        if (!is_null($request->getPostalCode())) {
            $data[$properties::BILLING_ADDRESS_POSTAL_CODE] = $request->getPostalCode();
        }
        if (!is_null($request->getCountry())) {
            $data[$properties::BILLING_ADDRESS_COUNTRY] = $request->getCountry();
        }

        return $data;
    }
}
