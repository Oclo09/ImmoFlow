<?php
use Nathanrchrd\Immoflow\Services\Database;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Config/env.php';

$pdo = Database::getConnection();

$app = AppFactory::create();
$app->addRoutingMiddleware();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);

$routes = require __DIR__ . '/../src/Routes/routes.php';
$routes($app);

$app->run();
?>