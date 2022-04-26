<?php
if(isset($_POST['id'])){

    $exitCategory = new CategoryController();
    $exitCategory->deleteCategories();
   
    
}
?>