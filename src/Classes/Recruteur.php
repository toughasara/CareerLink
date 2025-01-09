<?php

namespace App\Classes;


class Recruteur extends Utilisateur {
    private $nom_entreprise;
    private $pay;
    private $ville;
    private $utilisateur;

    public function __construct($nom_entreprise, $pay, $ville, $utilisateur) {
        parent::__construct($utilisateur->id, $utilisateur->email, $utilisateur->motdepasse, $utilisateur->role);
        $this->nom_entreprise = $nom_entreprise;
        $this->pay = $pay;
        $this->ville = $ville;
        $this->utilisateur = $utilisateur;
    }

    public function getNom_entreprise() { return $this->nom_entreprise; }
    public function getPay() { return $this->pay; }
    public function getVille() { return $this->ville; }
    public function getUtilisateur() { return $this->utilisateur; }
}