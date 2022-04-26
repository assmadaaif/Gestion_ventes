<?php
require_once('database/db.php');

class Client {
    
    public function __construct($nom = "", $prenom = "", $email="",$ville="", $telephone="", $adresse="" )
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->adresse = $adresse;
    }
    static  public function getAll() {

        $db = DB::connect();

        if($db == null) {
            return;
        }

        $query = $db->query('SELECT * FROM clients');

        $data = $query->fetchAll(PDO::FETCH_OBJ);

        $query = null;

        $db = null;

        return $data;
    }
    static public function Add($nom, $prenom, $email,$ville, $telephone,$adresse) {

        $db = DB::connect();
    
        if($db == null) {
            return;
        }
    
        $sql = "INSERT INTO clients (nom, prenom,email, ville, telephone, adresse) VALUES (:nom, :prenom, :email, :ville, :telephone, :adresse)";
    
        $smt = $db->prepare($sql);
    
        $smt->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":ville" => $ville,
            ":telephone" => $telephone,
            ":adresse" => $adresse,
            
        ]);
       
    
        $smt = null;
        $db = null;
        
    
    }

        
    static public function getClientById($id) {
            $db = DB::connect();

            if($db == null) {
                return;
            }
        try{
            $sql = "SELECT * FROM clients WHERE id= :id";

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



    static public function update($id,$nom, $prenom, $email,$ville, $telephone, $adresse) {
      
        $db =DB::connect();

        if($db == null) {
            return;
        }
 
        $sql = "UPDATE clients SET nom = :nom, prenom = :prenom,email =:email, ville = :ville,  adresse = :adresse, telephone = :telephone    WHERE id = :id";
 
        $smt = $db->prepare($sql);
 
        $smt->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":ville" => $ville,
            ":adresse" => $adresse,
            ":telephone" => $telephone,
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
 
        $sql = "DELETE FROM clients WHERE id = :id";
 
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
 
        $sql = "SELECT * FROM clients WHERE nom LIKE :search OR adresse LIKE :search";
 
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