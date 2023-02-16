<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Address
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Address
{
    /**
     * @var
     */
    public $street;
    /**
     * @var
     */
    public $number;
    /**
     * @var
     */
    public $district;
    /**
     * @var
     */
    public $postalCode;
    /**
     * @var
     */
    public $city;
    /**
     * @var
     */
    public $state;
    /**
     * @var
     */
    public $country;
    /**
     * @var
     */
    public $complement;

    /**
     * @param      $street
     * @param      $number
     * @param      $district
     * @param      $postalCode
     * @param      $city
     * @param      $state
     * @param      $country
     * @param null $complement
     *
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