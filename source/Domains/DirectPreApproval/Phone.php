<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Phone
 *
 */
class Phone
{
    public $areaCode;

    public $number;

    /**
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
