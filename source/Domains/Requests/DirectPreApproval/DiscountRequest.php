<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class DiscountRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
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

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param $preApprovalCode
     */
    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
