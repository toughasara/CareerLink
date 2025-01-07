<?php

namespace App\Classes;

class Emploi {
    private $titre;
    private $description;
    private $typecontrat;
    private $salaire;
    private $lieu;
    private $modetravail;
    private $categorie;
    private $recruteur;
    private $tags = [] ;

    public function __construct($titre, $description,  $typecontrat, $salaire, $lieu, $modetravail) {
            $this->titre = $titre;
            $this->description = $description;
            $this->typecontrat = $typecontrat;
            $this->salaire = $salaire;
            $this->lieu = $lieu;
            $this->modetravail = $modetravail;
            $this->recruteur = $recruteur;
            $this->categorie = $categorie;
            $this->tags = $tags;
    }

    public function getTitre() { return $this->titre; }
    public function getDescription() { return $this->description; }
    public function getTypecontrat() { return $this->typecontrat; }
    public function getSalaire() { return $this->salaire; }
    public function getLieu(){ return $this->lieu; }
    public function getModetravail(){ return $this->modetravail; }
    public function getRecruteur(){ return $this->recruteur; }
    public function getCategorie(){ return $this->categorie; }
    public function getTags(){ return  $this->tags; }
}