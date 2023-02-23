<?php

namespace PagSeguro\Parsers\Response;

/** Trait Application
 */
trait Application
{
    private $application;

    /**
     * @return mixed
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @return $this
     */
    public function setApplication($applications)
    {
        if (! is_null($applications->application)) {
            $application = new \PagSeguro\Domains\Responses\Applications\Application();
            $application->setId(current($applications->application->id))
                ->setName(current($applications->application->name))
                ->setRole(current($applications->application->role));
            $this->application = $application;
        }

        return $this;
    }
}
