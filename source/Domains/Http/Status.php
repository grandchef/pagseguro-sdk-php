<?php

namespace PagSeguro\Domains\Http;

/** Class Status
 * @package PagSeguro\Domains\Http
 */
class Status
{

    /**
     * @param $status
     * @return integer
     */
    public function getStatus($status)
    {
        return \PagSeguro\Enum\Http\Status::getValue($status);
    }

    /**
     * @param $type
     * @return string
     */
    public function getType($type)
    {
        return \PagSeguro\Enum\Http\Status::getValue($type);
    }
}
