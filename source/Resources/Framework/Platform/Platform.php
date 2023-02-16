<?php

namespace PagSeguro\Resources\Framework\Platform;

/** Interface Platform
 * @package PagSeguro\Resources\Framework\Platform
 */
interface Platform
{
    /**
     * @param $name
     * @return string
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $release
     * @return string
     */
    public function setRelease($release);

    /**
     * @return string
     */
    public function getRelease();
}
