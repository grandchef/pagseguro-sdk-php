<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Item;
use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class PaymentRequest
 *
 */
class PaymentRequest
{
    use ParserTrait;

    private $preApprovalCode;

    private $reference;

    private $senderHash;

    private $senderIp;

    private $items;

    /**
     * PaymentRequest constructor.
     */
    public function __construct()
    {
        $this->items = [];
    }

    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function setSenderHash($senderHash)
    {
        $this->senderHash = $senderHash;
    }

    public function setSenderIp($senderIp)
    {
        $this->senderIp = $senderIp;
    }

    /**
     * @return array
     */
    public function addItems(Item $item)
    {
        $this->items[] = $item;

        return $this->items;
    }
}
