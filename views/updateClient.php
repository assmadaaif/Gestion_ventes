<?php
if(isset($_POST['id'])){

    $exitClient = new ClientController();
    $client = $exitClient->getClient();
 
    
}
if(isset($_POST['submit'])){

    $exitClient = new ClientController();
    $exitClient->updateClients();
   
    
}
?>

<div class="content-wrapper ms-160 me-160">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Administrateur</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                        <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="">Clients</a></li>
                                <li class="breadcrumb-item active" aria-current="page">">Ajouter un client</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="box-body row">
                            <input type="hidden" name="id" value="<?php  echo $client->id?>">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Nom</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" value="<?php echo $client->nom?>" name="nom" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Prenom</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" value="<?php echo $client->prenom?>" name="prenom" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Adresse</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-map" aria-hidden="true"></i></span>
                                            <input type="text" value="<?php echo $client->adresse?>" name="adresse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Ville</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                            <input type="text" value="<?php echo $client->ville?>" name="ville" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">@</span>
                                            <input type="email" value="<?php echo $client->email?>" name="email"class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Teléphone</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                            <input type="tel" value="<?php echo $client->telephone?>" name="telephone" class="form-control">
                                        </div>
                                    </div>   
                                    
                                </div>
                                
                                

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Enregistrer
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
