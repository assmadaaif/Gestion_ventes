<nav class="navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between ">
        <div class="nav navbar-nav text-center ">
            <a class="nav-item nav-link fs-20 active p-3 ms-30" href="<?php echo BASE_URL?>home">Produits</a>
            <a class="nav-item nav-link fs-20 p-3 " href="<?php echo BASE_URL?>categories">Catégories</a>
            <a class="nav-item nav-link fs-20 p-3" href="<?php echo BASE_URL?>clients">Clients</a>
        </div>
        <div>
        <a href="<?php echo BASE_URL;?>logout"><i class="fa fa-user text-light fs-20"
                                title="deconnexion"><?php echo $_SESSION['user'];?></i></a>
        </div>
    </nav>