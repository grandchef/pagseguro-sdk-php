<?php

namespace PagSeguro\Resources\Responsibility\Notifications;

/** Interface Handler
 * @package PagSeguro\Resources\Responsibility\Notifications
 */
interface Handler
{
    /**
     * @param $next
     * @return mixed
     */
    public function successor($next);

    /**
     * @return mixed
     */
    public function handler();
}
