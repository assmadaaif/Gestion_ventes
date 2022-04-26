<?php

$home = new ClientController();
$clients= $home->getAllClients();

?>



<div class="content-wrapper me-140 ms-140">
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
                                        href="">Clients</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="">Liste des clients</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-body">

                    <div class="card-body">
                        <table id="example" class="text-fade table table-bordered display">
                        <thead class="bg-primary">
                                            <tr>

                                                <th>Nom & Prenom</th>
                                                <th>Email</th>
                                                <th>Télephone</th>
                                                <th>Ville</th>
                                                <th>Adresse</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach($clients as $client): ?>

                                                <td class="">
                                                    <?php echo $client->nom .' '.$client->prenom ?>
                                                </td>
                                                <td><?php echo $client->email?>
                                                </td>
                                                <td> <?php echo $client->telephone ?></td>
                                                <td> <?php echo $client->ville ?></td>
                                                <td> <?php echo $client->adresse ?></td>


                                                <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">

                                                        <form action="updateClient" method="POST">
                                                            <input type="hidden" name="id"
                                                                value="<?php  echo $client->id?>">

                                                            <button class="btn btn-success "><i class="align-middle"
                                                                    data-feather="edit-2"></i></button>
                                                        </form>
                                                        <form action="deleteClient" method="POST">
                                                            <input type="hidden" name="id"
                                                                value="<?php  echo $client->id?>">

                                                            <button class="btn btn-danger mx-3 "><i class="align-middle"
                                                                    data-feather="trash"></i></button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>

                                        </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class=" d-flex flex-row justify-content-end ">
                            <a href="<?php echo BASE_URL ?>addClient">
                                <button type="submit" class="btn btn-primary mt-3 mx-3">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                                </button></a>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>