<?php
 class User{

    static public function login($username) {
        $db = DB::connect();

        if($db == null) {
            return;
        }
       
     try{
        $sql = "SELECT * FROM users WHERE username= :username";

        $smt = $db->prepare($sql);

        $smt->execute([
            ":username" => $username
        ]);
     

        $user = $smt->fetch(PDO::FETCH_OBJ);
        return $user;
      }catch(PDOException $ex){
        echo 'erreur'. $ex->getMessage();

    }
}


    static public function createUser($fullename, $username, $password ) {

        $db = DB::connect();
    
        if($db == null) {
            return;
        }
    
        $sql = "INSERT INTO users (fullename, username, password) VALUES (:fullename, :username, :password)";
    
        $smt = $db->prepare($sql);
    
        $smt->execute([
            ":fullename" => $fullename,
            ":username" => $username,
            ":password" => $password,
          
        ]);
    
        $smt = null;
        $db = null;
        
    
    }
 }


?>