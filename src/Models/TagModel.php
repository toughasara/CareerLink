<?php
namespace App\Models;

use App\Classes\Tag;
use App\Config\Database;
use PDO;

class TagModel{
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function savetag($name, $description){
        $querytag = "INSERT INTO tag (nom, 'description') 
                            VALUES (:nom, :'description')";

        $tagId = $this->conn->lastInsertId();

        $stmttag = $this->conn->prepare($queryTag);
        $stmttag->bindParam(':tag_id', $tagId);
        $stmttag->bindParam(':nom', $nom);
        $stmttag->bindParam(':description', $description);
        $stmttag->execute();

        $queryFindtag = "SELECT id, nom, 'description'
                                FROM tag
                                WHERE id = :tag_id";

        $stmtFindtag = $this->conn->prepare($queryFindtag);
        $stmtFindtag->bindParam(':tag_id', $tagId);
        $stmtFindtag->execute();
        
        $row = $stmtFindtag->fetch(PDO::FETCH_ASSOC);

        $role = new tag($row['nom'], $row['description']);
    }
}