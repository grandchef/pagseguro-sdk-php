<?php

namespace PagSeguro\Helpers;

/** Class NotificationObject
 */
class NotificationObject
{
    /**
     * @return $this
     */
    public static function initialize()
    {
        $notification = new \PagSeguro\Domains\Notification();
        $notification->setCode(Xhr::getInputCode())
            ->setType(Xhr::getInputType());

        return $notification;
    }
}
