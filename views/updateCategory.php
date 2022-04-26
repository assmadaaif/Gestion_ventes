<?php
if(isset($_POST['id'])){

    $exitCategory = new CategoryController();
    $category = $exitCategory->getCategory();
 
    
}
if(isset($_POST['submit'])){

    $exitCategory = new CategoryController();
    $exitCategory->updateCategoriess();
   
    
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
                                <li class="breadcrumb-item"><a href=""><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="">Catégories </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="">Ajouter une
                                        catégorie</a></li>
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
                                <input type="hidden" name="id" value="<?php  echo $category->id?>">
                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label mb-2">Catégorie</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control " name="nom"
                                                value="<?php echo $category->nom ?>">
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div class="box-footer">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Enregistrer
                                </button>
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>
    </div>
    </section>
    <!-- /.content -->
</div>