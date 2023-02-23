<?php

namespace PagSeguro\Domains\Requests;

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
