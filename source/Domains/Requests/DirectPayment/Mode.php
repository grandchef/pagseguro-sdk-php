<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

/** Direct Payment Method
 */
/** Class Mode
 */
trait Mode
{
    private $mode;

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
    }
}
