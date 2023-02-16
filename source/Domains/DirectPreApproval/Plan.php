<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Plan
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Plan
{
    /**
     * @var
     */
    public $redirectURL;
    /**
     * @var
     */
    public $reference;
    /**
     * @var PreApproval
     */
    public $preApproval;
    /**
     * @var
     */
    public $reviewURL;
    /**
     * @var
     */
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

    /**
     * @param $redirectURL
     */
    public function setRedirectURL($redirectURL)
    {
        $this->redirectURL = $redirectURL;
    }

    /**
     * @param $reference
     */
    function setReference($reference)
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

    /**
     * @param $reviewURL
     */
    public function setReviewURL($reviewURL)
    {
        $this->reviewURL = $reviewURL;
    }

    /**
     * @param $maxUsers
     */
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