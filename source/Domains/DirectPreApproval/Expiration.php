<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Expiration
 *
 */
class Expiration
{
    public $value;

    public $unit;

    /**
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
