<?php

namespace PagSeguro\Resources\Responsibility\Notifications;

use PagSeguro\Helpers\Xhr;

/** Class PreApproval
 * @package PagSeguro\Resources\Responsibility\Notifications
 */
class PreApproval implements \PagSeguro\Resources\Responsibility\Notifications\Handler
{

    /**
     * @var
     */
    private $successor;

    /**
     * @param $next
     * @return $this
     */
    public function successor($next)
    {
        $this->successor = $next;
        return $this;
    }

    /**
     * @return mixed
     */
    public function handler()
    {
        if (!is_null(Xhr::getInputCode()) and
            !is_null(Xhr::getInputType()) and
            Xhr::getInputType() == \PagSeguro\Enum\Notification::PRE_APPROVAL) {
            $notification = \PagSeguro\Helpers\NotificationObject::initialize();
            return $notification->getCode();
        }
        return $this->successor->handler();
    }
}
