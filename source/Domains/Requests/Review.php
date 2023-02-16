<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Domains\Requests\Adapter\Url;

trait Review
{
    private $wUrl;
    
    public function getUrl()
    {
        return $this->wUrl;
    }

    public function setUrl($url)
    {
        $this->wUrl = $url;
    }
}
