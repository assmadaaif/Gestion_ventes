<?php
if(isset($_POST['id'])){

    $exitProduit = new ProduitController();
    $exitProduit->deleteProduit();
   
    
}
?>