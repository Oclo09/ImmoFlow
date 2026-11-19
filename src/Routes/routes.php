<?php
use Nathanrchrd\Immoflow\Controllers\AccueilController;
use Slim\App;

return function (App $app) {
    $app->get('/', [AccueilController::class, 'index']);
};