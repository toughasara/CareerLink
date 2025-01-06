<?php
namespace App\Controllers\Auth;

use App\Classes\User;
use App\Config\Database;
use App\Models\UserModel;
use PDO;

class AuthController{

    public function Registre_recruteur($nom_entreprise, $pay, $ville, $email, $password){
        $userModel = new UserModel();
        $user = $userModel->saveInfoOfRecruteur($nom_entreprise, $pay, $ville, $email, $password);
    }

    public function Registre_condidat($nom, $prenom, $email, $password, $adress, $linkdin){
        $userModel = new UserModel();
        $user = $userModel->saveInfoOfCondidat($nom, $prenom, $email, $password, $adress, $linkdin);
    }

    public function login($email, $password){
        $userModel = new UserModel();
        $user = $userModel->findUserByEmailAndPassword($email, $password);
        if($user == null){
            echo "user not found please check ...";
        }
        else{
            if($user->getRole()->getTitle() == "admin"){
                header("Location:../admin/statistique.php");
            }
            else if($user->getRole()->getTitle() == "candidate"){
                header("Location:../candidate/index.php");
            }
            else if($user->getRole()->getTitle() == "recruiter"){
                header("Location:../recruiter/index.php");
            }
        }
    }

}