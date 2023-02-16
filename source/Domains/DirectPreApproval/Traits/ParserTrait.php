<?php

namespace PagSeguro\Domains\DirectPreApproval\Traits;

/** Trait ParserTrait
 *
 * @package PagSeguro\Domains\DirectPreApproval\Traits
 */
trait ParserTrait
{
    /**
     * @param $data
     *
     * @return array
     */
    function object_to_array($data)
    {
        if (is_array($data) || is_object($data)) {
            $result = array();
            foreach ($data as $key => $value) {
                $result[$key] = $this->object_to_array($value);
            }

            return $result;
        }

        return $data;
    }
}