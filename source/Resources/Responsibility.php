<?php

namespace PagSeguro\Resources;

use PagSeguro\Resources\Responsibility\Configuration\Environment;
use PagSeguro\Resources\Responsibility\Configuration\Extensible;
use PagSeguro\Resources\Responsibility\Configuration\File;
use PagSeguro\Resources\Responsibility\Configuration\Wrapper;
use PagSeguro\Resources\Responsibility\Http\Methods\Generic;
use PagSeguro\Resources\Responsibility\Http\Methods\Request;
use PagSeguro\Resources\Responsibility\Http\Methods\Success;
use PagSeguro\Resources\Responsibility\Http\Methods\Unauthorized;
use PagSeguro\Resources\Responsibility\Notifications\Application;
use PagSeguro\Resources\Responsibility\Notifications\PreApproval;
use PagSeguro\Resources\Responsibility\Notifications\Transaction;

/** class Handler
 *
 */
class Responsibility
{
    /**
     * @return mixed
     */
    public static function http($http, $class)
    {
        $success = new Success();
        $request = new Request();
        $unauthorized = new Unauthorized();
        $generic = new Generic();

        $success->successor(
            $request->successor(
                $unauthorized->successor(
                    $generic
                )
            )
        );

        return $success->handler($http, $class);
    }

    public static function configuration()
    {
        $environment = new Environment;
        $extensible = new Extensible;
        $file = new File;
        $wrapper = new Wrapper;

        $wrapper->successor(
            $environment->successor(
                $file->successor(
                    $extensible
                )
            )
        );

        return $wrapper->handler(null, null);
    }

    public static function notifications()
    {
        $transaction = new Transaction();
        $preApproval = new PreApproval();
        $application = new Application();

        $transaction->successor(
            $preApproval->successor(
                $application
            )
        );

        return $transaction->handler();
    }
}
