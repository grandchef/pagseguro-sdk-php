<?php

require_once '../../../vendor/autoload.php';

\PagSeguro\Library::initialize();

$options = [
    'initial_date' => '2016-05-01T14:55',
    'final_date' => '2016-05-10T09:55', //Optional
    'page' => 1, //Optional
    'max_per_page' => 20, //Optional
];

try {
    $response = \PagSeguro\Services\PreApproval\Search\Date::search(
        \PagSeguro\Configuration\Configure::getAccountCredentials(),
        $options
    );

    echo '<pre>';
    print_r($response);
} catch (Exception $e) {
    exit($e->getMessage());
}
