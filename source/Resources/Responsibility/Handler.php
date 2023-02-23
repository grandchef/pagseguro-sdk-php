<?php

namespace PagSeguro\Resources\Responsibility;

/** interface Handler
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
    public function handler($action, $class);
}
