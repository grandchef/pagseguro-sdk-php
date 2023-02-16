<?php

namespace PagSeguro\Domains\Requests\Checkout\Payment;

use PagSeguro\Domains\Requests\Currency;
use PagSeguro\Domains\Requests\Item;
use PagSeguro\Domains\Requests\Metadata;
use PagSeguro\Domains\Requests\Notification;
use PagSeguro\Domains\Requests\Parameter;
use PagSeguro\Domains\Requests\PaymentMethod;
use PagSeguro\Domains\Requests\PaymentMethod\Accepted;
use PagSeguro\Domains\Requests\PreApproval\PreApproval;
use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Domains\Requests\Review;
use PagSeguro\Domains\Requests\Sender;
use PagSeguro\Domains\Requests\Shipping;
use PagSeguro\Domains\Requests\ReceiverEmail;
use PagSeguro\Domains\Requests\Reference;
use PagSeguro\Domains\Requests\Redirect;

/** Class Request
 * @package PagSeguro\Domains\Requests
 */
class Request implements Requests
{
    use Accepted {
        Accepted::accept as acceptPaymentMethod;
        Accepted::exclude as excludePaymentMethod;
        Accepted::getAttributeMap as acceptedPaymentMethods;
    }
    use Currency;
    use Item;
    use Metadata;
    use Notification {
        Notification::getUrl as getNotificationUrl;
        Notification::setUrl as setNotificationUrl;
    }
    use Parameter;
    use PaymentMethod;
    use PreApproval;
    use Sender;
    use Shipping;
    use Reference;
    use ReceiverEmail;
    use Redirect {
        Redirect::getUrl as getRedirectUrl;
        Redirect::setUrl as setRedirectUrl;
        Redirect::getUrl insteadof Notification;
        Redirect::setUrl insteadof Notification;
    }
    use Review {
        Review::getUrl as getReviewUrl;
        Review::setUrl as setReviewUrl;
        Review::getUrl insteadof Redirect;
        Review::setUrl insteadof Redirect;
    }
}
