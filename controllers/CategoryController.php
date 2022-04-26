<?php
class CategoryController{
  
    public function getAllCategories(){
        $Categories= Category::getAll();
        return $Categories;

    }
    public function getCategory(){
        if(isset($_POST['id'])){
           
            $id= $_POST['id'];
           
            $Category = Category::getCategoryById($id);
            return $Category;
        }



    }

    public function addCategories(){
        if(isset($_POST['submit'])){
            $nom = $_POST['nom'];
            
            $res=Category::Add($nom);
            // die(print_r($res));
            Redirect::to('categories');

            
        }
    }
    public function updateCategoriess(){
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $res=Category::update($id,$nom);
       
            if($res === 'OK'){
                Redirect::to('categories');
            }else{
                echo $res;
            }
            
        }
    }
    public function deleteCategories(){
        if(isset($_POST['id'])){
           
            $id = $_POST['id'];
           
            $res=Category::delete($id);
            if($res === 'OK'){
             Redirect::to('categories');
            }else{
                echo $res;
            }
        }



    }
}