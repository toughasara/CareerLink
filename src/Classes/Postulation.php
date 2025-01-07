<?php

namespace App\Classes;

class Role {
    private $id;
    private $datepostulation;
    private $candidat;
    private $emploi;

    public function __construct($id, $datepostulation) {
            $this->id = $id;
            $this->datepostulation = $datepostulation;
            $this->candidat = $candidat;
            $this->emploi = $emploi;
    }

    public function getDatepostulation(){
        return $this->datepostulation;
    }
    public function getCandidat(){
        return $this->candidat;
    }
    public function getEmploi(){
        return $this->emploi;
    }
    
}