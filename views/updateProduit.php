<?php
if(isset($_POST['id'])){

    $exitProduit = new ProduitController();
    $Produit = $exitProduit->getProduit();
 
  
}
if(isset($_POST['submit'])){

    $exitProduit = new ProduitController();
    $exitProduit->updateProduits();
   
    
}
$data = new CategoryController();
$categories = $data->getAllCategories();
?>

<div class="content-wrapper ms-160 me-160">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Ajouter un produit</h4>
                        </div>
                        <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php  echo $Produit->id?>">
                            <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nom de produit</label>
                                                <input type="text" class="form-control" name="nom">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Quantitée</label>
                                                <div class="input-group">
                                                    <div class="input-group"><i class="ti-cut"></i></div>
                                                    <input type="text" name="quantite" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                    <!--/row-->
                                    <div class="row">

                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Prix</label>
                                                <div class="input-group">
                                                    <div class="input-group"><i class="ti-money"></i></div>
                                                    <input type="text" class="form-control " name="prix">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Ancien prix</label>
                                                <div class="input-group">
                                                    <div class="input-group"><i class="ti-money"></i></div>
                                                    <input type="text" class="form-control " name="ancien_prix">
                                                </div>
                                            </div>
                                        </div>





                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Déscription</label>
                                                <textarea class="form-control p-15" name="description">
                                         </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Catégory</label>
                                                <select name="category_id" id="" class="form-control">
                                                    <?php foreach ($categories as $category) :?>
                                                    <option value="<?php echo $category->id ?>">
                                                        <?php echo $category->nom ?>

                                                    </option>
                                                    <?php endforeach ?>
                                                </select>

                                            </div>
                                        </div>


                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">

                                        <!--/span-->
                                        <div class="col-md-4">
                                            <h4 class="box-title mt-20">Choisir une Image</h4>
                                            <div class="product-img text-start">
                                                <div class="input-group mb-3 mt-3">
                                                    <div class="btn btn-info btn-file">
                                                        <i class="fa fa-paperclip"></i> Choisir autre image
                                                        <input class="form-control" type="file" name="image" id="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--/row-->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="box-title mt-40">General Info</h4>
                                            <div class="table-responsive">
                                                <table class="table no-border td-padding">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Brand">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Sellar">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Delivery Condition">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Knock Down">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Color">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Gift Pack">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-10">
                                    <button type="submit" name="submit" class="btn btn-primary"> <i
                                            class="fa fa-check"></i>
                                        Save</button>
                                    <button type="button" class="btn btn-light">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
</div>