<?php
namespace Nathanrchrd\Immoflow\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AccueilController
{
    // PSR-4 (Autoload)
    // PSR-7 ( De type de rêquetes, donc, on attend une demande /GET et un format de reponse
    public function index(Request $request, Response $response): Response
    {
        $page = 'Accueil';

        ob_start();
        include dirname(__DIR__, 2) . '/src/Views/accueil.php';
        $response->getBody()->write(ob_get_clean());
        
        return $response;
    }
}