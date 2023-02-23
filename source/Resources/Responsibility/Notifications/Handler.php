<?php

namespace PagSeguro\Resources\Responsibility\Notifications;

/** Interface Handler
 */
interface Handler
{
    /**
     * @return mixed
     */
    public function successor($next);

    /**
     * @return mixed
     */
    public function handler();
}
