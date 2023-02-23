<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait Basic
 */
trait Basic
{
    /**
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];

        // reference
        if (! is_null($request->getReference())) {
            $data[$properties::REFERENCE] = $request->getReference();
        }
        // redirectURL
        if (method_exists($request, 'getRedirectUrl') and ! is_null($request->getRedirectUrl())) {
            $data[$properties::REDIRECT_URL] = $request->getRedirectUrl();
        }
        // notificationURL
        if (method_exists($request, 'getNotificationUrl') and ! is_null($request->getNotificationUrl())) {
            $data[$properties::NOTIFICATION_URL] = $request->getNotificationUrl();
        }

        return $data;
    }
}
