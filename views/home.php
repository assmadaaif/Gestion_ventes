<?php
if(isset($_POST['find'])){

    $exitProduit = new ProduitController();
    $Produits=$exitProduit->searchProduit();
   
    
}else{
    $home = new ProduitController();
$Produits= $home->getAllProduits();
}
 $user=new UsersController();
 $user->auth();


?>

<div class="content-wrapper me-160 ms-160">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="col-md-8 mt-5 text-center">

        </div>
        <div class="content-header">
            <div class="col-md-6 text-center  ">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">Produits</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Listes des Produits</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Main content -->

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-xl-8">
                                    <div
                                        class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                        <form action="" method="post" class="ms-auto">
                                            <input type="text" name="search" placeholder="search" class="ms-5">
                                            <button class="btn btn-sm btn-primary mb-1 " name="find" type="submit"><i
                                                    class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="<?php  echo BASE_URL ;?>addProduit"> <button type="button"
                                                class="btn btn-primary mb-2 me-2"><i
                                                    class="mdi mdi-basket me-1"></i>Ajouter nouvelle
                                                produit</button></a>
                                        <button type="button" class="btn btn-secondary mb-2">Export</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="table-light text-fade">
                                        <tr class="text-dark">


                                            <th>Nom de Produit</th>
                                            <th>Image</th>
                                            <th>Déscription</th>
                                            <th>Quantitées</th>
                                            <th>Prix</th>
                                            <th>Ancien prix</th>

                                            <th class="text-center" style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($Produits as $Produit): ?>
                                        <tr>
                                            <td>
                                                <?php echo $Produit->nom ?>
                                            </td>
                                            <td class="me-5" style="width: 100px; hieght:100px ;">
                                                <img src="images/<?php  echo $Produit->image?>" alt="" srcset=""
                                                    class="img-fluid rounded">
                                            </td>
                                            <td>
                                                <?php echo $Produit->description ?>
                                            </td>
                                            <td>
                                                <?php echo $Produit->quantite ?>
                                            </td>
                                            <td>
                                                <?php echo $Produit->prix ?>
                                            </td>
                                            <td>
                                                <?php echo $Produit->ancien_prix ?>
                                            </td>

                                            <td class="d-flex text-center">
                                                <form action="deleteProduit" method="post">
                                                    <input type="hidden" name="id" value="<?php  echo $Produit->id?>">

                                                    <button class="btn btn-warning "><i class="fa fa-trash text-danger"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                                <form action="updateProduit" method="post">

                                                    <input type="hidden" name="id" value="<?php  echo $Produit->id?>">

                                                    <button class="btn btn-success mx-3"><i class="fa fa-pencil "
                                                            aria-hidden="true"></i></button>

                                                </form>

                                                <form action="showProduit" method="post">

                                                    <input type="hidden" name="id" value="<?php  echo $Produit->id?>">

                                                    <button class="btn btn-primary "><i class="fa fa-eye "
                                                            aria-hidden="true"></i></button>

                                                </form>




                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </section>
        <!-- /.content -->
    </div>
</div>