<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class DiscountRequest
 *
 */
class DiscountRequest
{
    use ParserTrait;

    private $type;

    private $value;

    private $preApprovalCode;

    /**
     * DiscountRequest constructor.
     */
    public function __construct()
    {
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
