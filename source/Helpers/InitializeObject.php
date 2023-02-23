<?php

namespace PagSeguro\Helpers;

/** Class InitializeObject
 */
class InitializeObject
{
    /**
     * Check if $attr is started, if not instatiate it
     *
     * @param  object  $attr
     * @param  class  $instantiateClass
     * @return object from $instantiateClass
     */
    public static function initialize($attr, $instantiateClass)
    {
        if (! isset($attr) || empty($attr) || is_null($attr)) {
            $attr = new $instantiateClass;
        }

        return $attr;
    }
}
