<?php

require_once('data.php');

class Produit extends DataProvider {

    public function __construct($nom = "", $description = "", $image="", $quantite="", $category_id="" ,$prix="" ,$ancien_prix="")
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->image = $image;
        $this->quantite = $quantite;
        $this->ancien_prix = $ancien_prix;
        $this->image = $image;
        $this->prix = $prix;
        $this->category_id = $category_id;
    }
    public function addProduit($Nom, $Prenom, $Age, $Service, $Matricale) {

        $db =$this->connect();
    
        if($db == null) {
            return;
        }
    
        $sql = "INSERT INTO produits (Nom, Prenom, Age, Service, Matricale) VALUES (:Nom, :Prenom, :Age, :Service, :Matricale,)";
    
        $smt = $db->prepare($sql);
    
        $smt->execute([
            ":Nom" => $Nom,
            ":Prenom" => $Prenom,
            ":Age" => $Age,
            ":Service" => $Service,
            ":Matricale" => $Matricale,
        ]);
    
        $smt = null;
        $db = null;
        return ('index.php');
    
    }
 
     public function getAllProduits() {

        $db = $this->connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM produits');

        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = null;

        $db = null;

        return $data;
    }
 
}
?>    