<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Plan
 *
 */
class Plan
{
    public $redirectURL;

    public $reference;

    /**
     * @var PreApproval
     */
    public $preApproval;

    public $reviewURL;

    public $maxUsers;

    /**
     * @var Receiver
     */
    public $receiver;

    /**
     * Plan constructor.
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

    public function setMaxUsers($maxUsers)
    {
        $this->maxUsers = $maxUsers;
    }

    /**
     * @return Receiver
     */
    public function setReceiver()
    {
        return $this->receiver;
    }
}
