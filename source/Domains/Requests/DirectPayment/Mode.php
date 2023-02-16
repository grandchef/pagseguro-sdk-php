<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

/** Direct Payment Method
 */
/** Class Mode
 * @package PagSeguro\Domains\Requests\DirectPayment
 */
trait Mode
{
    /**
     * @var
     */
    private $mode;

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
}
