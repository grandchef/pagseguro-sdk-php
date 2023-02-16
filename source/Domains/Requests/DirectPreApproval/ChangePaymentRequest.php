<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\ChangePlanSender;
use PagSeguro\Domains\DirectPreApproval\CreditCard;
use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class ChangePaymentRequest
 *
 * @package PagSeguro\Domains\Requests\DirectPreApproval
 */
class ChangePaymentRequest
{
    use ParserTrait;
    private $type;
    private $creditCard;
    private $sender;
    private $preApprovalCode;

    /**
     * ChangePaymentRequest constructor.
     */
    public function __construct()
    {
        $this->type = 'CREDITCARD';
        $this->creditCard = new CreditCard();
        $this->sender = new ChangePlanSender();
    }

    /**
     * @return CreditCard
     */
    public function setCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @return ChangePlanSender
     */
    public function setSender()
    {
        return $this->sender;
    }

    /**
     * @param $preApprovalCode
     */
    public function setPreApprovalCode($preApprovalCode)
    {
        $this->preApprovalCode = $preApprovalCode;
    }
}
