<?php

namespace PagSeguro\Domains\Requests;

trait Notification
{
    private $nUrl;

    public function getUrl()
    {
        return $this->nUrl;
    }

    public function setUrl($url)
    {
        $this->nUrl = $url;
    }
}
