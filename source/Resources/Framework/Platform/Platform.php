<?php

namespace PagSeguro\Resources\Framework\Platform;

/** Interface Platform
 */
interface Platform
{
    /**
     * @return string
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function setRelease($release);

    /**
     * @return string
     */
    public function getRelease();
}
