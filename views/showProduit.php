<?php
if(isset($_POST['id'])){

    $exitProduit = new ProduitController();
    $Produit = $exitProduit->getProduit();
    $data = new CategoryController();
    $categories = $data->getAllCategories();
    
}?>
<div class="content-wrapper ms-160 me-160">
    <div class="">
        <section class="content ">

            <div class="row ">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="box box-body b-1 text-center no-shadow">
                                        <img src="images/<?php echo $Produit->image ?>"
                                            id="product-image" class="img-fluid" alt="" />
                                    </div>
                                    <div class="pro-photos">
                                        <div class="photos-item item-active">
                                            <img src="images/<?php echo $Produit->image ?>"
                                                alt="">
                                        </div>
                                        <div class="photos-item">
                                            <img src="images/<?php echo $Produit->image ?>" alt="">
                                        </div>
                                        <div class="photos-item">
                                            <img src="images/<?php echo $Produit->image ?>" alt="">
                                        </div>
                                        <div class="photos-item">
                                            <img src="images/<?php echo $Produit->image ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <form class="ps-lg-4">
                                        <!-- Product title -->
                                        <h3 class="mt-0"> <?php echo $Produit->nom ?><a href="javascript: void(0);"
                                                class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a>
                                        </h3>
                                        <p class="fs-16">
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                            <span class="text-warning mdi mdi-star"></span>
                                        </p>

                                        <!-- Product stock -->
                                        <div class="mt-3">
                                            <h4><span class="badge badge-success">Instock</span></h4>
                                        </div>

                                        <!-- Product description -->
                                        <div class="mt-4">
                                            <h6 class="fs-15">Prix:</h6>
                                            <h3> <?php echo $Produit->prix ?>DH</h3>
                                        </div>

                                        <!-- Quantity -->


                                        <!-- Product description -->
                                        <div class="mt-4">
                                            <h6 class="fs-15">Description:</h6>
                                            <p class="text-fade"> <?php echo $Produit->description ?></p>
                                        </div>

                                        <!-- Product information -->
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class="fs-15">Available Stock:</h6>
                                                    <p class="text-fade">1784</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="fs-15">Number of Orders:</h6>
                                                    <p class="text-fade">5,458</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="fs-15">Revenue:</h6>
                                                    <p class="text-fade">$8,57,014</p>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h4 class="box-title mt-40">General Info</h4>
                                    <div class="table-responsive">
                                        <table class="table text-fade">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 390px;">Brand</td>
                                                    <td> Brand Name </td>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Condition</td>
                                                    <td> Lorem Ipsum </td>
                                                </tr>
                                                <tr>
                                                    <td>Type</td>
                                                    <td> Party Wear </td>
                                                </tr>
                                                <tr>
                                                    <td>Style</td>
                                                    <td> Modern </td>
                                                </tr>
                                                <tr>
                                                    <td>Product Number</td>
                                                    <td> FG1548952 </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>