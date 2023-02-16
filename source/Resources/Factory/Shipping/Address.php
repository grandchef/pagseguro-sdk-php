<?php

namespace PagSeguro\Resources\Factory\Shipping;

use PagSeguro\Enum\Properties\Current;

/** Class Shipping
 * @package PagSeguro\Resources\Factory\Request
 */
class Address
{

    /**
     * @var \PagSeguro\Domains\Shipping
     */
    private $shipping;

    /**
     * Shipping constructor.
     * @param $shipping
     */
    public function __construct($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @param \PagSeguro\Domains\Address $address
     * @return \PagSeguro\Domains\Shipping
     */
    public function instance(\PagSeguro\Domains\Address $address)
    {
        $this->shipping->setAddress($address);
        return $this->shipping;
    }

    /**
     * @param $array
     * @return \PagSeguro\Domains\Shipping
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
        $this->shipping->setAddress($address);
        return $this->shipping;
    }

    /**
     * @param $street
     * @param $number
     * @param null $complement
     * @param $district
     * @param $postalCode
     * @param $city
     * @param $state
     * @param $country
     * @return \PagSeguro\Domains\Shipping
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
        $this->shipping->setAddress($address);
        return $this->shipping;
    }
}
