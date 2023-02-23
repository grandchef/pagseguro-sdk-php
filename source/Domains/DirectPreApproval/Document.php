<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Document
 *
 */
class Document
{
    public $type;

    public $value;

    /**
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
