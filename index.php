
<?php
include './autoload.php';
include './views/include/header.php';
  
$home = new HomeController();
$pages=['home','addProduit','updateProduit','deleteProduit','logout','showProduit',
'clients','deleteClient','updateClient','addClient','categories','addCategory','deleteCategory','updateCategory'];
if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
      if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
                $page= $_GET['page'];
                $home->index($page);
            }else{
                include 'views/include/404.php';
            }
        }else{
            $home->index('home');
        }
}else{
    if(isset($_GET['page']) && $_GET['page'] === 'register' ){
        $home->index('register');
    }else{
        $home->index('login');
    }

}
      
?>
<?php include './views/include/footer.php';?>
