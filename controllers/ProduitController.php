<?php



class ProduitController{
    public function getAllProduits(){
        $Produit= Produit::getAll();
        return $Produit;

    }
     public function addProduits(){
        if(isset($_POST['submit'])){
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $quantite = $_POST['quantite'];
            $prix = $_POST['prix'];
            $ancien_prix = $_POST['ancien_prix'];
            $category_id = $_POST['category_id'];
            $image=$_FILES['image']['name'];
            $destination = 'images/' .$image;
 
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            

            $res=Produit::Add($nom, $description,$quantite ,$prix, $ancien_prix,$category_id,$image);
            // die(print_r($res));
            Redirect::to('home');

            
        }
    }
    public function getProduit(){
        if(isset($_POST['id'])){
           
            $id= $_POST['id'];
           
            $Produit = Produit::getProduitById($id);
            return $Produit;
        }



    }
   

    public function updateProduits(){
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $quantite = $_POST['quantite'];
            $prix = $_POST['prix'];
            $ancien_prix = $_POST['ancien_prix'];
            $category_id = $_POST['category_id'];
            $image=$_FILES['image']['name'];
            $destination = 'images/' .$image;
 
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            
          

            $res=Produit::update($id,$nom, $description,$quantite ,$prix,$image ,$ancien_prix,$category_id);
            if($res === 'OK'){
                Redirect::to('home');
            }else{
                echo $res;
            }
            
        }
    }
    public function deleteProduit(){
        if(isset($_POST['id'])){
           
            $id = $_POST['id'];
           
            $res=Produit::delete($id);
            if($res === 'OK'){
             Redirect::to('home');
            }else{
                echo $res;
            }
        }



    }
    public function searchProduit(){
        if(isset($_POST['search'])){
           
            $search= $_POST['search'];
           }
            $res = Produit::search($search);
            return $res;
        



    }

}
?>