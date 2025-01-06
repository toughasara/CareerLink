<?php

namespace App\Classes;


class Recruteur extends Utilisateur {
    public $nom_entreprise;
    public $pay;
    public $ville;
    public $codepostal;

    public function __construct($nom_entreprise, $pay, $ville, $codepostal, $utilisateur) {
        parent::__construct($utilisateur->id, $utilisateur->email, $utilisateur->motdepasse, $utilisateur->role);
        $this->nom_entreprise = $nom_entreprise;
        $this->pay = $pay;
        $this->ville = $ville;
        $this->codepostal = $codepostal;
    }

    public function getNom_entreprise() { return $this->nom_entreprise; }
    public function getPay() { return $this->pay; }
    public function getVille() { return $this->ville; }
    public function getCodepostal() { return $this->codepostal; }
}