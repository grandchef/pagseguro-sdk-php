<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\Adapter\Url;

trait Redirect
{
    private $rUrl;
    
    public function getUrl()
    {
        return $this->rUrl;
    }

    public function setUrl($url)
    {
        $this->rUrl = $url;
    }
}
