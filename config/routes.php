<?php
// Routes
$app->get('/', \App\Controllers\HelloController::class . ':index');

$app->group('/ws', function () {
    // BeneficiariesWebService
    $this->get('/getBeneficiary', \App\Controllers\BeneficiaryController::class . ':index');

    // ValoWebService
    $this->get('/getValorisation', \App\Controllers\ValorisationController::class . ':index');
    $this->get('/getValorisationManuelle', \App\Controllers\ValorisationController::class . ':index');

    // Common
    $this->get('/getServerStatus', \App\Controllers\CommonController::class . ':index');
});

$app->group('/test', function () {
    // BeneficiariesWebService
    $this->get('/wsdl', \App\Controllers\HelloController::class . ':wsdl');
    $this->post('', \App\Controllers\HelloController::class . ':indexWS');
});