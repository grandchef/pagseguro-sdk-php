<?php

namespace PagSeguro\Domains\Http;

/** Class Status
 */
class Status
{
    /**
     * @return int
     */
    public function getStatus($status)
    {
        return \PagSeguro\Enum\Http\Status::getValue($status);
    }

    /**
     * @return string
     */
    public function getType($type)
    {
        return \PagSeguro\Enum\Http\Status::getValue($type);
    }
}
