<?php
if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
    Redirect::to('home');    
   }
   
   
       $login = new UsersController();
       $login->auth();
      
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card">
                <div class="card-title text-center text-primary ">Connexion</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="username" id="" placeholder="username" class="form-control mb-3">
                            <input type="password" name="password" id="" placeholder="password" class="form-control mb-3">
                        </div>



                        <button type="submit" name="submit" class="btn btn-primary me-3">Connexion</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL;?>register" class="btn btn-link">Inscription</a>
                </div>
                </a>
            </div>

        </div>
    </div>