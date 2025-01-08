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
    // get categorie
    public function trouvercategorie($id){
        $queryFindCategorie = "SELECT * FROM Categorie where id = :id";
        $stmtselectCategorie = $this->conn->prepare($queryFindCategorie);
        $stmtselectCategorie->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmtselectCategorie->execute();
        $categorie = $stmtselectCategorie->fetch(\PDO::FETCH_ASSOC);
        if ($categorie) {
            $categorie = new Categorie($categorie['id'], $categorie['nom'], $categorie['description']);
            return $categorie;
        } else {
            return null;
        }
    }

    // get tout les categories
    public function getAllCategories(){
        $queryFindCategorie = "SELECT * FROM Categorie";
        $stmtselectCategorie = $this->conn->prepare($queryFindCategorie);
        $stmtselectCategorie->execute();
        $categories = $stmtselectCategorie->fetchAll(\PDO::FETCH_ASSOC);

        $category_objects = [];
        foreach ($categories as $category) {
            $category_objects [] = new Categorie($category['id'],$category['nom'],$category['description'] );
        }

        return $category_objects;
    }

    // savecategorie
    public function savecategorie($name, $description){
        $queryCategorie = "INSERT INTO Categorie (nom, description) 
                            VALUES (:nom, :description)";

        $stmtcategorie = $this->conn->prepare($queryCategorie);

        $stmtcategorie->bindParam(':nom', $name);
        $stmtcategorie->bindParam(':description', $description);

        $stmtcategorie->execute();
    }

    // supprimer categorie
    public function supprimerCayegorie($id){
        $query = "DELETE FROM Categorie WHERE id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    // modifier categorie
    public function updateCategorie($categorie){
        $id = $categorie->getId();
        $name = $categorie->getNom();
        $description = $categorie->getDescription();

        $query = "UPDATE Categorie 
                SET nom = :name , description = :description
                WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}