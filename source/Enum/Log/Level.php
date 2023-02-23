<?php

namespace PagSeguro\Enum\Log;

use PagSeguro\Enum\Enum;

/** Describes log levels.
 */
class Level extends Enum
{
    const EMERGENCY = 'emergency';

    const ALERT = 'alert';

    const CRITICAL = 'critical';

    const ERROR = 'error';

    const WARNING = 'warning';

    const NOTICE = 'notice';

    const INFO = 'info';

    const DEBUG = 'debug';
}
