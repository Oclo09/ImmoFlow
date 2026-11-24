<?php
use Slim\App;
use Nathanrchrd\Immoflow\Controllers\AccueilController;
use Nathanrchrd\Immoflow\Controllers\AppartementController;
use Nathanrchrd\Immoflow\Controllers\LocataireController;

return function (App $app) {
    $app->get('/', [AccueilController::class, 'index']);
    $app->get('/appartements', [AppartementController::class, 'getAllApparts']);
    $app->get('/appartement/{id}', [AppartementController::class, 'getApartById']);
    $app->get('/locataires', [LocataireController::class, 'getAllLocataires']);
    $app->get('/locataire/{id}', [LocataireController::class, 'getLocataireById']);
};