<?php

namespace PagSeguro\Resources\Factory\Sender;

use PagSeguro\Enum\Properties\Current;

/** Class Shipping
 */
class Address
{
    /**
     * @var \PagSeguro\Domains\Shipping
     */
    private $sender;

    /**
     * Address constructor.
     */
    public function __construct($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return \PagSeguro\Domains\Shipping
     */
    public function instance(\PagSeguro\Domains\Address $address)
    {
        $this->sender->setAddress($address);

        return $this->sender;
    }

    /**
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
        $this->sender->setAddress($address);

        return $this->sender;
    }

    /**
     * @param  null  $complement
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
        $this->sender->setAddress($address);

        return $this->sender;
    }
}
