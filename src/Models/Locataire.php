<?php
namespace Nathanrchrd\Immoflow\Models;

use Nathanrchrd\Immoflow\Services\Database;
use PDO;

class Locataire
{
    private int $id;
    private ?int $idAppart;
    private ?string $loueLe;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $numTel;

    public function __construct(int $id, ?int $idAppart, ?string $loueLe, string $nom, string $prenom, string $email, string $numTel) {
        $this->id = $id;
        $this->idAppart = $idAppart;
        $this->loueLe = $loueLe;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numTel = $numTel;
    }

    public function getId(): int 
    {
        return $this->id;
    }

    public function getIdAppart(): ?int 
    {
        return $this->idAppart;
    }

    public function getLoueLe(): ?string 
    {
        return $this->loueLe;
    }

    public function getNom(): string 
    {
        return $this->nom;
    }

    public function getPrenom(): string 
    {
        return $this->prenom;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getNumTel(): string 
    {
        return $this->numTel;
    }

    public static function lireTousLesLocataires(): array
    {
        $sql = "SELECT id, idAppart, loueLe, nom, prenom, email, numTel
                FROM locataire";

        $statement = Database::dbRun($sql);
        $rows = $statement->fetchAll();

        $locataires = [];
        foreach($rows as $row) {        
            if ($row["idAppart"] !== null) {
                $idAppart = (int) $row["idAppart"];
            } else {
                $idAppart = null;
            }
            
            $locataires[] = new self((int) $row["id"], $idAppart, $row["loueLe"], $row["nom"], $row["prenom"], $row["email"], $row["numTel"]);
        }
        
        return $locataires;
    }

    public static function lireUnLocataire(int $id): ?self
    {
        $sql = "SELECT id, idAppart, loueLe, nom, prenom, email, numTel
                FROM locataire
                WHERE id = :id";
        
        $param = [
            "id" => $id
        ];

        $statement = Database::dbRun($sql, $param);
        $row = $statement->fetch();

        if ($row == false) {
            return null;
        }
        
        if ($row["idAppart"] !== null) {
            $idAppart = (int) $row["idAppart"];
        } else {
            $idAppart = null;
        }

        return new self((int) $row["id"], $idAppart, $row["loueLe"], $row["nom"], $row["prenom"], $row["email"], $row["numTel"]);
    }
}