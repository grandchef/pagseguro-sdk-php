<?php

namespace PagSeguro\Resources\Log;

use PagSeguro\Configuration\Configure;
use PagSeguro\Enum\Log\Level;

/** It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 */
class Logger implements LoggerInterface
{
    const DEFAULT_FILE = 'PagSeguro.Log';

    /**
     * System is unusable.
     *
     * @param  string  $message
     * @return void|null
     *
     * @throws \Exception
     */
    public static function emergency($message, array $context = [])
    {
        self::log(Level::EMERGENCY, $message, $context);
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param  string  $message
     * @return void|null
     *
     * @throws \Exception
     */
    public static function alert($message, array $context = [])
    {
        self::log(Level::ALERT, $message, $context);
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     */
    public static function critical($message, array $context = [])
    {
        self::log(Level::CRITICAL, $message, $context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     */
    public static function error($message, array $context = [])
    {
        self::log(Level::ERROR, $message, $context);
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     */
    public static function warning($message, array $context = [])
    {
        self::log(Level::WARNING, $message, $context);
    }

    /**
     * Normal but significant events.
     *
     * @param  string  $message
     * @return void|null
     *
     * @throws \Exception
     */
    public static function notice($message, array $context = [])
    {
        self::log(Level::NOTICE, $message, $context);
    }

    /**
     * Interesting events.
     * Example: User logs in, SQL logs.
     *
     * @param  string  $message
     * @return void|null
     *
     * @throws \Exception
     */
    public static function info($message, array $context = [])
    {
        self::log(Level::INFO, $message, $context);
    }

    /**
     * Detailed debug information.
     *
     * @param  string  $message
     * @return void|null
     *
     * @throws \Exception
     */
    public static function debug($message, array $context = [])
    {
        self::log(Level::DEBUG, $message, $context);
    }

    /**
     * @param  mixed  $level
     * @param  string  $message
     * @return bool
     *
     * @throws \Exception
     */
    public static function log($level, $message, array $context = [])
    {
        if (! self::active()) {
            return false;
        }

        try {
            // self::write(self::location(), self::message($level, $message, $context));
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * Make a message
     *
     * @return string
     *
     * @throws \Exception
     */
    private static function message($level, $message, array $context = [])
    {
        $dateTime = new \DateTime('NOW');

        return sprintf(
            "\n%1s PagSeguro.%s[%1s]: %s", //"%1sPagSeguro.%2s[%3s]: %4s"
            $dateTime->format('d/m/Y H:i:s'),
            ! array_key_exists('service', $context) ? '' : sprintf('%1s', $context['service']),
            $level,
            $message
        );
    }

    /**
     * Write in file
     */
    private static function write($file, $message)
    {
        file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
    }

    /**
     * Verify if the log option in configuration file is active
     *
     * @return bool
     */
    private static function active()
    {
        return Configure::getLog()->getActive();
    }

    /**
     * Verify if has a location in configuration file
     *
     * @return string
     */
    private static function location()
    {
        if (Configure::getLog()->getLocation()) {
            return Configure::getLog()->getLocation();
        } else {
            return sprintf('%1s/../%1s', PS_BASEPATH, self::DEFAULT_FILE);
        }
    }
}
