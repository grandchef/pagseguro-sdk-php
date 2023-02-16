<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Expiration
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Expiration
{
    /**
     * @var
     */
    public $value;
    /**
     * @var
     */
    public $unit;

    /**
     * @param $value
     * @param $unit
     *
     * @return $this
     */
    public function withParameters(
        $value,
        $unit
    ) {
        $this->value = $value;
        $this->unit = $unit;

        return $this;
    }
}