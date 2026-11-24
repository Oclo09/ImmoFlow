<?php
use Slim\App;
use Nathanrchrd\Immoflow\Controllers\AccueilController;
use Nathanrchrd\Immoflow\Controllers\AppartementController;

return function (App $app) {
    $app->get('/', [AccueilController::class, 'index']);
    $app->get('/appartements', [AppartementController::class, 'getAllApparts']);
    $app->get('/appartement/{id}', [AppartementController::class, 'getApartById']);
};