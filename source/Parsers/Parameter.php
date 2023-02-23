<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait Parameter
 */
trait Parameter
{
    /**
     * @return array
     */
    public static function getData(Requests $request)
    {
        $data = [];

        if ($request->parameterLenght() > 0) {
            $parameter = $request->getParameter();
            foreach ($parameter as $key => $value) {
                if (! is_null($parameter[$key]->getKey())) {
                    if (! is_null($parameter[$key]->getIndex())) {
                        $data[sprintf('%s%s', $parameter[$key]->getKey(), $parameter[$key]->getIndex())] =
                            $parameter[$key]->getValue();
                    } else {
                        $data[$parameter[$key]->getKey()] = $parameter[$key]->getValue();
                    }
                }
            }
        }

        return $data;
    }
}
