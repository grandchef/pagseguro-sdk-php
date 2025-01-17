<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard;

use PagSeguro\Domains\Requests\Currency;
use PagSeguro\Domains\Requests\DirectPayment\Mode;
use PagSeguro\Domains\Requests\DirectPayment\Sender;
use PagSeguro\Domains\Requests\Item;
use PagSeguro\Domains\Requests\Notification;
use PagSeguro\Domains\Requests\Parameter;
use PagSeguro\Domains\Requests\ReceiverEmail;
use PagSeguro\Domains\Requests\Redirect;
use PagSeguro\Domains\Requests\Reference;
use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Domains\Requests\Shipping;

/** Class Request
 */
class Request implements Requests
{
    use Billing;
    use Currency;
    use Installment;
    use Holder;
    use Item;
    use Mode;
    use Notification {
        Notification::getUrl as getNotificationUrl;
        Notification::setUrl as setNotificationUrl;
        Notification::getUrl insteadof Redirect;
        Notification::setUrl insteadof Redirect;
    }
    use Parameter;
    use ReceiverEmail;
    use Sender;
    use Shipping;
    use Reference;
    use Redirect {
        Redirect::getUrl as getRedirectUrl;
        Redirect::setUrl as setRedirectUrl;
    }
    use Token;
}
