<?php

namespace PagSeguro\Resources\Connection\Base;

use PagSeguro\Resources\Builder;

/** Class Session
 */
trait Session
{
    /**
     * @return string
     */
    public function buildSessionRequestUrl()
    {
        return Builder\Session::getRequestUrl();
    }
}
