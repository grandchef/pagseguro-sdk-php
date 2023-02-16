<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Document
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Document
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

    /**
     * @param $type
     * @param $value
     *
     * @return $this
     */
    public function withParameters(
        $type,
        $value
    ) {
        $this->type = $type;
        $this->value = $value;

        return $this;
    }
}