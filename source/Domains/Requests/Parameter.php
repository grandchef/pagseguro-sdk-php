<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Helpers\InitializeObject;

/** Description of Parameter
 *
 */
trait Parameter
{
    private $parameter;
    
    public function addParameter()
    {
        $this->parameter = InitializeObject::Initialize(
            $this->parameter,
            new \PagSeguro\Resources\Factory\Request\Parameter()
        );
        
        return $this->parameter;
    }

    public function setParameter($parameter)
    {
        if (is_array($parameter)) {
            $arr = array();
            foreach ($parameter as $key => $parameterItem) {
                if ($parameterItem instanceof \PagSeguro\Domains\Parameter) {
                    $arr[$key] = $parameterItem;
                } else {
                    if (is_array($parameter)) {
                        $arr[$key] = new \PagSeguro\Domains\Parameter($parameterItem);
                    }
                }
            }
            $this->parameter = $arr;
        }
    }

    public function getParameter()
    {
        return current($this->parameter);
    }

    public function parameterLenght()
    {
        return (! is_null($this->parameter)) ? count(current($this->parameter)) : 0;
    }
}
