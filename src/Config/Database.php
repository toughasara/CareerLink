<?php
<<<<<<< HEAD
namespace App\Config;


use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database{
    private $conn;


    public function connection()
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        try {
            $this->conn = new PDO("mysql:host=".$_ENV["LOCALHOST"].";dbname=".$_ENV["DATABASE"],$_ENV["USER"],$_ENV["USER_PASSWORD"]);
            return $this->conn;
        } catch (PDOException $th) {
            die("connection faild".$th->getMessage());
        }
    }

}



=======

class DatabaseConnection
{
    private $host="localhost";
    private $dbname="CareerLink";
    private $user="root";
    private $pass="";
    private $connexion;

    public function connect() {
    
            $this->connexion = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass  );
            echo "Connexion réussie !";
            return $this->connexion;

    }
}

>>>>>>> 8f176fbb454097af1f873e445c0801296336e66b
?>