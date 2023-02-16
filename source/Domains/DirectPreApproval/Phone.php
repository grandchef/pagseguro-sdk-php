<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Phone
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Phone
{
    /**
     * @var
     */
    public $areaCode;
    /**
     * @var
     */
    public $number;

    /**
     * @param $areaCode
     * @param $number
     *
     * @return $this
     */
    public function withParameters(
        $areaCode,
        $number
    ) {
        $this->areaCode = $areaCode;
        $this->number = $number;

        return $this;
    }
}