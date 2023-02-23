<?php

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\PreApproval;
use PagSeguro\Domains\DirectPreApproval\Receiver;
use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

/** Class PlanRequest
 *
 */
class PlanRequest
{
    use ParserTrait;

    public $redirectURL;

    public $reference;

    public $preApproval;

    public $reviewURL;

    public $maxUses;

    public $receiver;

    /**
     * PlanRequest constructor.
     */
    public function __construct()
    {
        $this->preApproval = new PreApproval();
        $this->receiver = new Receiver();
    }

    public function setRedirectURL($redirectURL)
    {
        $this->redirectURL = $redirectURL;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return PreApproval
     */
    public function setPreApproval()
    {
        return $this->preApproval;
    }

    public function setReviewURL($reviewURL)
    {
        $this->reviewURL = $reviewURL;
    }

    public function setMaxUses($maxUsers)
    {
        $this->maxUses = $maxUsers;
    }

    /**
     * @return Receiver
     */
    public function setReceiver()
    {
        return $this->receiver;
    }
}
