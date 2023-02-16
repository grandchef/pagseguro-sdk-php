<?php

require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");

/*
 * To do a dynamic configuration of the library credentials you have to use the set methods
 * from the static class \PagSeguro\Configuration\Configure. 
 */

//For example, to configure the library dynamically:
\PagSeguro\Configuration\Configure::setEnvironment('production');//production or sandbox
\PagSeguro\Configuration\Configure::setAccountCredentials(
    'your_pagseguro_email',
    'your_pagseguro_token'
);
\PagSeguro\Configuration\Configure::setCharset('UTF-8');// UTF-8 or ISO-8859-1
\PagSeguro\Configuration\Configure::setLog(true, '/logpath/logFilename.log');

/** @todo To set the application credentials instead of the account credentials use:
 * \PagSeguro\Configuration\Configure::setApplicationCredentials(
 *  'appId',
 *  'appKey'
 * );
 */

try {
    /**
     * @todo For use with application credentials use:
     * \PagSeguro\Configuration\Configure::getApplicationCredentials()
     *  ->setAuthorizationCode("FD3AF1B214EC40F0B0A6745D041BFDDD")
     */
    $sessionCode = \PagSeguro\Services\Session::create(
        \PagSeguro\Configuration\Configure::getAccountCredentials()
    );

    echo "<strong>ID de sess&atilde;o criado: </strong>{$sessionCode->getResult()}";
} catch (Exception $e) {
    die($e->getMessage());
}
