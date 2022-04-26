<?php
if(isset($_POST['submit'])){

    $User = new UsersController();
    $User->register();
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card">
                <div class="card-title text-primary text-center">Inscription</div>

                <div class="card-body">
                    <form method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="fullename" id="" placeholder="Nom & Prenom"
                                class="form-control mb-3">
                            <input type="text" name="username" id="" placeholder="username" class="form-control mb-3">
                            <input type="password" name="password" id="" placeholder="password"
                                class="form-control mb-3">
                        </div>

                        

                        <button type="submit" name="submit" class="btn btn-primary me-3">Inscription</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL;?>login" class="btn btn-link">connexion</a>
                </div>
                </a>
            </div>

        </div>
    </div>