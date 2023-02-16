<?php

namespace PagSeguro\Enum\Configuration;

use PagSeguro\Enum\Enum;

class Environment extends Enum
{
    //Environment
    const ENV = 'PAGSEGURO_ENV';

    //Credentials
    const EMAIL = 'PAGSEGURO_EMAIL';
    const TOKEN_PRODUCTION = 'PAGSEGURO_TOKEN_PRODUCTION';
    const TOKEN_SANDBOX = 'PAGSEGURO_TOKEN_SANDBOX';
    const APP_ID_PRODUCTION = 'PAGSEGURO_APP_ID_PRODUCTION';
    const APP_ID_SANDBOX = 'PAGSEGURO_APP_ID_SANDBOX';
    const APP_KEY_PRODUCTION = 'PAGSEGURO_APP_KEY_PRODUCTION';
    const APP_KEY_SANDBOX = 'PAGSEGURO_APP_KEY_SANDBOX';

    //Encoding
    const CHARSET = 'PAGSEGURO_CHARSET';

    //Log
    const LOG_ACTIVE = 'PAGSEGURO_LOG_ACTIVE';
    const LOG_LOCATION = 'PAGSEGURO_LOG_LOCATION';
}
