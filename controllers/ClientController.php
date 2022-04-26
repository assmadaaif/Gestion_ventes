<?php

class ClientController{
    public function getAllClients(){
        $Client= Client::getAll();
        return $Client;

    }
     public function addClients(){
        if(isset($_POST['submit'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $ville = $_POST['ville'];
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];
            $res=Client::Add($nom, $prenom,$email ,$ville, $telephone,$adresse);
            // die(print_r($res));
            Redirect::to('clients');

            
        }
    }

    public function getClient(){
        if(isset($_POST['id'])){
           
            $id= $_POST['id'];
           
            $Client = Client::getClientById($id);
            return $Client;
        }



    }
    public function updateClients(){
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $ville = $_POST['ville'];
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];
          
          

            $res=Client::update($id,$nom, $prenom,$email, $adresse, $ville, $telephone);
            if($res === 'OK'){
                Redirect::to('clients');
            }else{
                echo $res;
            }
            
        }
    }
    public function deleteClient(){
        if(isset($_POST['id'])){
           
            $id = $_POST['id'];
           
            $res=Client::delete($id);
            if($res === 'OK'){
             Redirect::to('clients');
            }else{
                echo $res;
            }
        }



    }
    public function searchClient(){
        if(isset($_POST['search'])){
           
            $search= $_POST['search'];
           }
            $res = Client::search($search);
            return $res;
        



    }

}
?>