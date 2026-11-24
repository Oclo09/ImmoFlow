<?php
namespace Nathanrchrd\Immoflow\Models;

use Nathanrchrd\Immoflow\Services\Database;
use PDO;

class Appartement
{
    private int $id;
    private string $numero;
    private int $nbrPiece;
    private int $prixLocation;
    private string $statut;
    private string $creeLe;

    public function __construct(int $id, string $numero, int $nbrPiece, int $prixLocation, string $statut, string $creeLe) {
        $this->id = $id;
        $this->numero = $numero;
        $this->nbrPiece = $nbrPiece;
        $this->prixLocation = $prixLocation;
        $this->statut = $statut;
        $this->creeLe = $creeLe;
    }

    public function getId(): int 
    {
        return $this->id;
    }

    public function getNumero(): string 
    {
        return $this->numero;
    }

    public function getNbrPiece(): int 
    {
        return $this->nbrPiece;
    }

    public function getPrixLocation(): int 
    {
        return $this->prixLocation;
    }

    public function getStatut(): string 
    {
        return $this->statut;
    }

    public function getCreeLe(): string 
    {
        return $this->creeLe;
    }

    public static function lireTousLesAppartements(): array
    {
        $sql = "SELECT id, numero, nbrPiece, prixLocation, statut, creeLe
                FROM appartement";

        $statement = Database::dbRun($sql);
        $rows = $statement->fetchAll();

        $appartements = [];
        foreach($rows as $row) {
            $appartements[] = new self((int) $row["id"], $row["numero"], (int) $row["nbrPiece"], (int) $row["prixLocation"], $row["statut"], $row["creeLe"]);
        }
        
        return $appartements;
    }

    public static function lireUnAppartement(int $id): ?self
    {
        $sql = "SELECT id, numero, nbrPiece, prixLocation, statut, creeLe
                FROM appartement
                WHERE id = :id";
        
        $param = [
            "id" => $id
        ];

        $statement = Database::dbRun($sql, $param);
        $row = $statement->fetch();

        if ($row == false) {
            return null;
        }
        
        return new self((int) $row["id"], $row["numero"], (int) $row["nbrPiece"], (int) $row["prixLocation"], $row["statut"], $row["creeLe"]);
    }
}