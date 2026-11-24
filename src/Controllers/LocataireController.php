<?php
namespace Nathanrchrd\Immoflow\Controllers;

use Nathanrchrd\Immoflow\Models\Locataire;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LocataireController extends RenderController
{
    // PSR-4 (Autoload)
    // PSR-7 ( De type de rêquetes, donc, on attend une demande /GET et un format de reponse
    public function getAllLocataires(Request $request, Response $response): Response
    {
        $locataires = Locataire::lireTousLesLocataires();
        $page = 'locataires';

        return $this->render($response, $page, [
            'locataires' => $locataires,
        ]);
    }

    public function getLocataireById(Request $request, Response $response, array $args): Response
    {
        $id = (int) $args['id'];
        $locataire = Locataire::lireUnLocataire($id);
        $page = 'locataire';

        return $this->render($response, $page, [
            'locataire' => $locataire,
        ]);
    }
}