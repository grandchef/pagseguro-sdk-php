<?php

namespace PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Billing;

use PagSeguro\Enum\Properties\Current;

/** Class Shipping
 */
class Address
{
    /**
     * @var \PagSeguro\Domains\DirectPayment\CreditCard\Billing
     */
    private $billing;

    /**
     * Shipping constructor.
     */
    public function __construct($billing)
    {
        $this->billing = $billing;
    }

    /**
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Billing
     */
    public function instance(\PagSeguro\Domains\Address $address)
    {
        $this->billing->setAddress($address);

        return $this->billing;
    }

    /**
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Billing
     */
    public function withArray($array)
    {
        $properties = new Current;
        $address = new \PagSeguro\Domains\Address();
        $address->setPostalCode($array[$properties::SHIPPING_ADDRESS_POSTAL_CODE])
            ->setStreet($array[$properties::SHIPPING_ADDRESS_STREET])
            ->setNumber($array[$properties::SHIPPING_ADDRESS_NUMBER])
            ->setComplement($array[$properties::SHIPPING_ADDRESS_COMPLEMENT])
            ->setDistrict($array[$properties::SHIPPING_ADDRESS_DISTRICT])
            ->setCity($array[$properties::SHIPPING_ADDRESS_NUMBER])
            ->setState($array[$properties::SHIPPING_ADDRESS_STATE])
            ->setCountry($array[$properties::SHIPPING_ADDRESS_COUNTRY]);
        $this->billing->setAddress($address);

        return $this->billing;
    }

    /**
     * @param  null  $complement
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Billing
     */
    public function withParameters(
        $street,
        $number,
        $district,
        $postalCode,
        $city,
        $state,
        $country,
        $complement = null
    ) {
        $address = new \PagSeguro\Domains\Address();
        $address->setPostalCode($postalCode)
            ->setStreet($street)
            ->setNumber($number)
            ->setComplement($complement)
            ->setDistrict($district)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country);
        $this->billing->setAddress($address);

        return $this->billing;
    }
}
