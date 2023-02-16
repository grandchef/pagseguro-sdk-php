<?php

namespace PagSeguro\Resources\Responsibility;

/** interface Handler
 * @package PagSeguro\Services\Connection\Responsibility
 */
interface Handler
{
    /**
     * @param $next
     * @return mixed
     */
    public function successor($next);

    /**
     * @param $action
     * @param $class
     * @return mixed
     */
    public function handler($action, $class);
}
