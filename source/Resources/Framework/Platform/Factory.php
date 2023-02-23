<?php

namespace PagSeguro\Resources\Framework\Platform;

/** Class Factory
 */
class Factory
{
    private $name;

    private $release;

    /**
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function setRelease($release)
    {
        $this->release = $release;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelease()
    {
        return $this->release;
    }
}
