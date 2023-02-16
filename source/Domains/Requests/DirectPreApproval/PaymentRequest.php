<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Item;
use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class PaymentRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
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

    /**
     * @param $preApprovalCode
     */
    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }

    /**
     * @param $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param $senderHash
     */
    public function setSenderHash($senderHash)
    {
        $this->senderHash = $senderHash;
    }

    /**
     * @param $senderIp
     */
    public function setSenderIp($senderIp)
    {
        $this->senderIp = $senderIp;
    }

    /**
     * @param Item $item
     *
     * @return array
     */
    public function addItems(Item $item)
    {
        $this->items[] = $item;

        return $this->items;
    }
}
