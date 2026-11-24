<?php
namespace Nathanrchrd\Immoflow\Controllers;

use Nathanrchrd\Immoflow\Models\Appartement;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AppartementController extends RenderController
{
    // PSR-4 (Autoload)
    // PSR-7 ( De type de rêquetes, donc, on attend une demande /GET et un format de reponse
    public function getAllApparts(Request $request, Response $response): Response
    {
        $appartements = Appartement::lireTousLesAppartements();
        $page = 'appartements';

        return $this->render($response, $page, [
            'appartements' => $appartements,
        ]);
    }

    public function getApartById(Request $request, Response $response, array $args): Response
    {
        $id = (int) $args['id'];
        $appartement = Appartement::lireUnAppartement($id);
        $page = 'appartement';

        return $this->render($response, $page, [
            'appartement' => $appartement,
        ]);
    }
}