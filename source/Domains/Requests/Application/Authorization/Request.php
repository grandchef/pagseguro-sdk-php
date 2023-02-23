<?php

namespace PagSeguro\Domains\Requests\Application\Authorization;

use PagSeguro\Domains\Authorization\AccountTrait;
use PagSeguro\Domains\Requests\Notification;
use PagSeguro\Domains\Requests\Permissions;
use PagSeguro\Domains\Requests\Redirect;
use PagSeguro\Domains\Requests\Reference;
use PagSeguro\Domains\Requests\Requests;

/** Class Request
 */
class Request implements Requests
{
    use Notification {
        Notification::getUrl as getNotificationUrl;
        Notification::setUrl as setNotificationUrl;
        Notification::getUrl insteadof Redirect;
        Notification::setUrl insteadof Redirect;
    }
    use Permissions;
    use Reference;
    use AccountTrait;
    use Redirect {
        Redirect::getUrl as getRedirectUrl;
        Redirect::setUrl as setRedirectUrl;
    }
}
