<?php

namespace App\Controllers;
use App\Classes\Admin;
use App\Classes\Categorie;
use App\Models\CategorieModel;

class CategorieController{

    private CategorieModel $categorieModel;

    public function __construct()   {
        $this->categorieModel = new CategorieModel();
    }

    // ajouter une categorie
    public function addcategorie($name,$description){
        $categorie = new Categorie(null, $name,$description);
        // $admine->ajouterCategorie($categorie);

        $this->categorieModel->savecategorie($name, $description);

    }

    // get tout les categories
    public function getCategories(){
        return $this->categorieModel->getAllCategories();
    }

    // modification de categorie
    public function updateCategorie($category_id, $name , $description){
        // var_dump($category_id);
        // exit;
        $id = $category_id;

        $categorie = $admine->trouverCategorieParId($id);

        if ($categorie !== null) {
            $categorie->setNom($name);
            $categorie->setDescription($description);
            return true;
        }
        return false;
    }

    public function trouvercategorie($category_id){
        $id = $category_id;
        return $this->categorieModel->trouvercategorie($id);
    }

    public function deleteCategoryByd($category_id){
        $this->categorieModel->dropCayegorie($category_id);
        $_SESSION['success']['message'] = 'Deleted Successfully';
    }
    // supprimer une categorie 
    public function deleteCategoryById($category_id){
        $id = $category_id;

        $this->categorieModel->supprimerCayegorie($id);

        // $categorieASupprimer = $admine->trouverCategorieParId($id);

        // $categories = $admine->getCategories();

        // if ($categorie !== null) {
        //     foreach ($this->categories as $index => $categorie) {
        //         if ($categorie === $categorieASupprimer) {
        //             unset($this->categories[$index]);
        //             $this->categories = array_values($this->categories);
        //             return true;
        //         }
        //     }
        //     return false; 
        // }
        // return false;
    }

}