<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Utilisateur;
use App\Classes\Recruteur;
use App\Config\Database;
use PDO;

class UserModel{
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connection();
    }


    public function saveInfoOfCondidat($nom, $prenom, $email, $password, $adress, $linkdin) {        
        $queryUtilisateur = "INSERT INTO Utilisateur (email, password, role_id) 
                            VALUES (:email, :password, :role_id)";

        $queryCandidat = "INSERT INTO Candidat (utilisateur_id, nom, prenom, adress, linkdin) 
                            VALUES (:utilisateur_id, :nom, :prenom, :adress , :linkdin)";
    
        $stmtUtilisateur = $this->conn->prepare($queryUtilisateur);
        $stmtUtilisateur->bindParam(':email', $email);
        $stmtUtilisateur->bindParam(':password', $hashedPassword = password_hash($password, PASSWORD_BCRYPT));
        $stmtUtilisateur->bindParam(':role_id', $roleId = 3);
        $stmtUtilisateur->execute();

        $utilisateurId = $this->conn->lastInsertId();

        $stmtCandidat = $this->conn->prepare($queryCandidat);
        $stmtCandidat->bindParam(':utilisateur_id', $utilisateurId);
        $stmtCandidat->bindParam(':nom', $nom);
        $stmtCandidat->bindParam(':prenom', $prenom);
        $stmtCandidat->bindParam(':adress', $adress);
        $stmtCandidat->bindParam(':linkdin', $linkdin);
        $stmtCandidat->execute();

        $queryFindUser = "SELECT Utilisateur.id, Utilisateur.email, Utilisateur.password, 
                        Role.id as role_id, Role.title as `role`,
                        Candidat.nom, Candidat.prenom, Candidat.adress, Candidat.linkdin
                        FROM Utilisateur
                        JOIN Role ON Role.id = Utilisateur.role_id
                        JOIN Candidat ON Candidat.utilisateur_id = Utilisateur.id
                        WHERE Utilisateur.id = :utilisateur_id";

        $stmtFindUser = $this->conn->prepare($queryFindUser);
        $stmtFindUser->bindParam(':utilisateur_id', $utilisateurId);
        $stmtFindUser->execute();
        
        $row = $stmtFindUser->fetch(PDO::FETCH_ASSOC);

        $role = new Role($row['role_id'], $row['role']);
        $user = new Utilisateur($row['id'], $row['email'], $row['password'], $role);
        $Candidat = new Candidat(
            $row['nom'],
            $row['prenom'],
            $row['adress'],
            $row['linkdin'],
            $user
        );
    } 


    public function saveInfoOfRecruteur($nom_entreprise, $pay, $ville, $email, $password) {        
        $queryUtilisateur = "INSERT INTO Utilisateur (email, password, role_id) 
                            VALUES (:email, :password, :role_id)";

        $queryRecruteur = "INSERT INTO Recruteur (utilisateur_id, nom_entreprise, pay, ville) 
                            VALUES (:utilisateur_id, :nom_entreprise, :pay, :ville)";
    
        $stmtUtilisateur = $this->conn->prepare($queryUtilisateur);
        $stmtUtilisateur->bindParam(':email', $email);
        $stmtUtilisateur->bindParam(':password', $hashedPassword = password_hash($password, PASSWORD_BCRYPT));
        $stmtUtilisateur->bindParam(':role_id', $roleId = 2);
        $stmtUtilisateur->execute();
    
        $utilisateurId = $this->conn->lastInsertId();

        $stmtRecruteur = $this->conn->prepare($queryRecruteur);
        $stmtRecruteur->bindParam(':utilisateur_id', $utilisateurId);
        $stmtRecruteur->bindParam(':nom_entreprise', $nom_entreprise);
        $stmtRecruteur->bindParam(':pay', $pay);
        $stmtRecruteur->bindParam(':ville', $ville);
        $stmtRecruteur->execute();

        $queryFindUser = "SELECT Utilisateur.id, Utilisateur.email, Utilisateur.password, 
                        Role.id as role_id, Role.title as `role`,
                        Recruteur.nom_entreprise, Recruteur.pay, Recruteur.ville, Recruteur.codepostal
                        FROM Utilisateur
                        JOIN Role ON Role.id = Utilisateur.role_id
                        JOIN Recruteur ON Recruteur.utilisateur_id = Utilisateur.id
                        WHERE Utilisateur.id = :utilisateur_id";

        $stmtFindUser = $this->conn->prepare($queryFindUser);
        $stmtFindUser->bindParam(':utilisateur_id', $utilisateurId);
        $stmtFindUser->execute();
        
        $row = $stmtFindUser->fetch(PDO::FETCH_ASSOC);

        $role = new Role($row['role_id'], $row['role']);
        $user = new Utilisateur($row['id'], $row['email'], $row['password'], $role);
        $recruteur = new Recruteur(
            $row['nom_entreprise'],
            $row['pay'],
            $row['ville'],
            $row['codepostal'],
            $user
        );
    } 
    


    public function findUserByEmailAndPassword($email, $password){
        session_start();
        $query = "SELECT Utilisateur.id , Utilisateur.email , Utilisateur.password , Role.id as role_id , Role.titre as `role`
                FROM Utilisateur 
                join Role on Role.id = Utilisateur.role_id 
                where Utilisateur.email = :email";

        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // var_dump($row);
        // exit();
        if(!$row || !password_verify($password, $row["password"])){
        return null;
        }
        else{
            $_SESSION["id"] = $row["id"];
            $_SESSION["role"] = $row["role"];

            $role = new Role($row["role_id"], $row["role"]);
            return new Utilisateur($row['id'],$row["email"],$row["password"],$role);
        }
    }
}