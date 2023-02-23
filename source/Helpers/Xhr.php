<?php

namespace PagSeguro\Helpers;

/** Class Xhr
 */
class Xhr
{
    /**
     * Validate if the request is a POST http method
     *
     * @return bool
     */
    public static function hasPost()
    {
        //initialize super global is required
        $post = $_POST;

        return self::validate($post);
    }

    /**
     * Validate if the request is a GET http method
     *
     * @return bool
     */
    public static function hasGet()
    {
        //initialize super global is required
        $get = $_GET;

        return self::validate($get);
    }

    /**
     * Get input code post value
     *
     * @return int|null
     */
    public static function getInputCode()
    {
        //use filter input instead of super globals for security
        return filter_input(INPUT_POST, 'notificationCode', FILTER_SANITIZE_STRING) !== null ?
            filter_input(INPUT_POST, 'notificationCode', FILTER_SANITIZE_STRING) : null;
    }

    /**
     * Get input type post value
     *
     * @return string|null
     */
    public static function getInputType()
    {
        //use filter input instead of super globals for security
        return filter_input(INPUT_POST, 'notificationType', FILTER_SANITIZE_STRING) !== null ?
            filter_input(INPUT_POST, 'notificationType', FILTER_SANITIZE_STRING) : null;
    }

    /**
     * Validate if the input is set.
     *
     * @return bool
     */
    private static function validate($input)
    {
        if (isset($input)) {
            return true;
        }

        return false;
    }
}
