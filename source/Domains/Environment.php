<?php

namespace PagSeguro\Domains;

class Environment
{
    private $environment;

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param  string  $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }
}
