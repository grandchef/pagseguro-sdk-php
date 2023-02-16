<?php

namespace PagSeguro\Helpers;

class Validate
{
    final public static function cUrl()
    {
        if (!function_exists('curl_init')) {
            throw new \Exception(
                'PagSeguro Library cURL library is required.',
                '[cURL]'
            );
        }
    }

    final public static function simpleXml()
    {
        if (!extension_loaded('simplexml')) {
            throw new \Exception(
                'PagSeguro Library simple xml is required.',
                '[SimpleXml]'
            );
        }
    }
}
