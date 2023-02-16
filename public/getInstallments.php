<?php

require_once "../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");

$options = [
    'amount' => 30.00, //Required
    'card_brand' => 'visa', //Optional
    'max_installment_no_interest' => 2 //Optional
];

try {
    $result = \PagSeguro\Services\Installment::create(
        \PagSeguro\Configuration\Configure::getAccountCredentials(),
        $options
    );

    echo "<pre>";
    print_r($result->getInstallments());
} catch (Exception $e) {
    die($e->getMessage());
}
