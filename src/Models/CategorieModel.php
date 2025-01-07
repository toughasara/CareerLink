<?php
namespace App\Models;

use App\Classes\Categorie;
use App\Config\Database;
use PDO;

class CategorieModel{
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function selectcategorie(){
        $queryFindCategorie = "SELECT id, nom, 'description'
                                FROM Categorie";

        $stmtselectCategorie = $this->conn->prepare($querySelectCategorie);
        $stmtselectCategorie->bindParam(':categorie_id', $categorieId);
        $stmtselectCategorie->execute();
    }

    public function savecategorie($name, $description){
        $queryCategorie = "INSERT INTO Categorie (nom, 'description') 
                            VALUES (:nom, :'description')";

        $categorieId = $this->conn->lastInsertId();

        $stmtcategorie = $this->conn->prepare($queryCategorie);
        $stmtcategorie->bindParam(':categorie_id', $categorieId);
        $stmtcategorie->bindParam(':nom', $nom);
        $stmtcategorie->bindParam(':description', $description);
        $stmtcategorie->execute();

        $queryFindCategorie = "SELECT id, nom, 'description'
                                FROM Categorie
                                WHERE id = :categorie_id";

        $stmtFindCategorie = $this->conn->prepare($queryFindCategorie);
        $stmtFindCategorie->bindParam(':categorie_id', $categorieId);
        $stmtFindCategorie->execute();
        
        $row = $stmtFindCategorie->fetch(PDO::FETCH_ASSOC);

        $role = new Categorie($row['id'], $row['nom'], $row['description']);
    }
}