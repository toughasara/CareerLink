<?php

namespace App\Classes;


class Candidat extends Utilisateur {
    private $nom;
    private $prenom;
    private $adresse;
    private $linkedin;

    public function __construct($nom, $prenom, $adresse, $linkedin, $utilisateur) {
        parent::__construct($utilisateur->id, $utilisateur->email, $utilisateur->motdepasse, $utilisateur->role);
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->linkedin = $linkedin;
    }

    public function getNom() { return $this->nom; }
    public function getPrenom() { return $this->prenom; }
    public function getAdresse() { return $this->adresse; }
    public function getLinkedin() { return $this->linkedin; }
}