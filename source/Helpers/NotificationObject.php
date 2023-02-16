<?php

namespace PagSeguro\Helpers;

/** Class NotificationObject
 * @package PagSeguro\Helpers
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
