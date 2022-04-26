<?php
require_once('database/db.php');

class Produit {
    
    public function __construct($nom = "", $description = "", $quantite="",$prix="" ,$category_id="" ,$ancien_prix="")
    {
        $this->nom = $nom;
        $this->description = $description;
        
        $this->quantite = $quantite;
        $this->ancien_prix = $ancien_prix;
       
        $this->prix = $prix;
        $this->category_id = $category_id;
        
    }
    static  public function getAll() {

        $db = DB::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM produits');

        $data = $query->fetchAll(PDO::FETCH_OBJ);

        $query = null;

        $db = null;

        return $data;
    }
  

        
    static public function getProduitById($id) {
            $db = DB::connect();

            if($db == null) {
                return;
            }
        try{
            $sql = "SELECT * FROM produits WHERE id= :id";

            $smt = $db->prepare($sql);

            $smt->execute([
                ":id" => $id
            ]);
         

            $Produit = $smt->fetch(PDO::FETCH_OBJ);
            return $Produit;
        }catch(PDOException $ex){
            echo 'erreur'. $ex->getMessage();

        }
    }

    static public function Add($nom, $description, $quantite, $prix, $ancien_prix, $category_id,$image) {

        $db = DB::connect();
    
        if($db == null) {
            return;
        }
    
        $sql = "INSERT INTO produits (nom, description,quantite, ancien_prix, prix, category_id,image) VALUES (:nom, :description, :quantite, :ancien_prix, :prix, :category_id, :image)";
    
        $smt = $db->prepare($sql);
    
        $smt->execute([
            ":nom" => $nom,
            ":description" => $description,
            ":quantite" => $quantite,
            ":ancien_prix" => $ancien_prix,
            ":prix" => $prix,
            ":category_id" => $category_id,
            ":image" => $image,
            
        ]);
       
    
        $smt = null;
        $db = null;
        
    
    }
    static public function update($id,$nom, $description,$quantite ,$prix,$image, $ancien_prix,$category_id) {
      
        $db =DB::connect();

        if($db == null) {
            return;
        }
 
        $sql = "UPDATE Produits SET nom = :nom, description = :description,quantite =:quantite, ancien_prix = :ancien_prix,  prix = :prix, category_id = :category_id, image =:image    WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":nom" => $nom,
            ":description" => $description,
            ":quantite" => $quantite,
            ":ancien_prix" => $ancien_prix,
            ":prix" => $prix,
            ":category_id" => $category_id,
            ":image" => $image,
            ":id" => $id
        ]);
        if($smt->execute()){
            return 'OK';
        }else{
            return 'erreur';
        }
 
        $smt = null;
        $db = null;
    }

 
    static public function delete($id) {
      
        $db = DB::connect();

        if($db == null) {
            return;
        }
 
        $sql = "DELETE FROM produits WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":id" => $id
        ]);  if($smt->execute()){
            return 'OK';
        }else{
            return 'erreur';
        }
        
 
        $smt = null;
        $db = null;
    }

    static public function search($search) {
       
        $db = DB::connect();

        if($db == null) {
            return;
        }
 
        $sql = "SELECT * FROM produits WHERE nom LIKE :search OR category_id LIKE :search";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":search" => '%' . $search . '%'
        ]);

        $data = $smt->fetchAll(PDO::FETCH_OBJ);
        
        $smt = null;
        $db = null;

        if(!$data) {
            return [];
        }

        return $data;
    }
}


?>