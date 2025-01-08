<?php

namespace App\Classes;

class Admin {
    private $categories = [];

    public function ajouterCategorie($categorie) {
        $this->categories[] = $categorie;
    }

    public function trouverCategorieParId($id) {
        foreach ($this->categories as $categorie) {
            if ($categorie->getId() == $id) {
                return $categorie;
            }
        }
        return null;
    }

    public function getCategories() {
        return $this->categories;
    }

}

?>