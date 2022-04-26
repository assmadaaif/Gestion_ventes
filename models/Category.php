<?php

Class Category{

    public function __construct($nom = "")
    {
        $this->nom = $nom;
      
    }
    static  public function getAll() {

        $db = DB::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM categories');

        $data = $query->fetchAll(PDO::FETCH_OBJ);

        $query = null;

        $db = null;

        return $data;
    }



    
    static public function Add($nom) {

        $db = DB::connect();
    
        if($db == null) {
            return;
        }
    
        $sql = "INSERT INTO categories (nom) VALUES (:nom)";
    
        $smt = $db->prepare($sql);
    
        $smt->execute([
            ":nom" => $nom,
            
        ]);
       
    
        $smt = null;
        $db = null;
        
    
    }

        
    static public function getCategoryById($id) {
            $db = DB::connect();

            if($db == null) {
                return;
            }
        try{
            $sql = "SELECT * FROM categories WHERE id= :id";

            $smt = $db->prepare($sql);

            $smt->execute([
                ":id" => $id
            ]);
         

            $Client = $smt->fetch(PDO::FETCH_OBJ);
            return $Client;
        }catch(PDOException $ex){
            echo 'erreur'. $ex->getMessage();

        }
    }



    static public function update($id,$nom) {
      
        $db =DB::connect();

        if($db == null) {
            return;
        }
 
        $sql = "UPDATE categories SET nom = :nom WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":nom" => $nom,
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
 
        $sql = "DELETE FROM categories WHERE id = :id";
 
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

}