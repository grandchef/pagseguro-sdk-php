<?php

namespace PagSeguro\Domains\Requests;

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
