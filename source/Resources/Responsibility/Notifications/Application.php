<?php

namespace PagSeguro\Resources\Responsibility\Notifications;

use PagSeguro\Helpers\Xhr;

/** Class Application
 * @package PagSeguro\Resources\Responsibility\Notifications
 */
class Application implements \PagSeguro\Resources\Responsibility\Notifications\Handler
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
            Xhr::getInputType() == \PagSeguro\Enum\Notification::APPLICATION_AUTHORIZATION) {
            $notification = \PagSeguro\Helpers\NotificationObject::initialize();
            return $notification->getCode();
        }
        throw new \InvalidArgumentException("Invalid notification parameters.");
    }
}
