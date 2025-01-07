<?php

require_once("../../../vendor/autoload.php");
use App\Controllers\Auth\AuthController;



if(isset($_POST["submit"]))
{

    if(empty($_POST["nom_entreprise"]) && empty($_POST["pay"]) && empty($_POST["ville"]) && empty($_POST["email"]) && empty($_POST["password"]))
    {
        echo "email or password is empty";
    }
    else{
        $nom_entreprise = $_POST["nom_entreprise"];
        $pay = $_POST["pay"];
        $ville = $_POST["ville"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $authController = new AuthController();
        $authController->Registre_recruteur($nom_entreprise, $pay, $ville, $email, $password);

    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assests/css/registre.css">
</head>
<body>
    <div class="container">
        <div class="register-card">
            <div class="logo">
                <i class="fas fa-briefcase me-2"></i>CareerLink
            </div>
            <h4 class="text-center mb-4">Créer un compte</h4>
            
            <div class="user-type-selector">
                <a class="user-type-btn" href="registrecon.php">
                    <i class="fas fa-user me-2"></i>Candidat
                </a>
                <a class="user-type-btn active" href="registrerec.php">
                    <i class="fas fa-building me-2"></i>Recruteur
                </a>
            </div>

            <form id="registerForm">

                <input type="text" class="form-control" name="nom_entreprise" placeholder="Nom de l'entreprise">
                <input type="text" class="form-control" name="pay" placeholder="pay">
                <input type="text" class="form-control" name="ville" placeholder="ville">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                <!-- <input type="password" class="form-control" name="email" placeholder="Confirmer le mot de passe"> -->

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">
                        J'accepte les conditions d'utilisation et la politique de confidentialité
                    </label>
                </div>

                <input hidden type="password" class="form-control" name="submit" value="submit" placeholder="Mot de passe">

                <button type="submit" class="btn btn-primary">Créer mon compte</button>
            </form>

            <div class="text-center mt-4">
                <p>Déjà inscrit ? <a href="login.php">Connectez-vous</a></p>
            </div>
        </div>
    </div>

    <!-- js -->
    <!-- <script src="../assests/js/registre.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>