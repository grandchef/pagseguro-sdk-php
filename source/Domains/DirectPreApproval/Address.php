<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Address
 *
 */
class Address
{
    public $street;

    public $number;

    public $district;

    public $postalCode;

    public $city;

    public $state;

    public $country;

    public $complement;

    /**
     * @param  null  $complement
     * @return $this
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
        $this->street = $street;
        $this->number = $number;
        $this->district = $district;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->complement = $complement;

        return $this;
    }
}
