    
<?php 

include('../include/header.php')
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
               <div class="card">
                   <div class="card-body">
                   <table class="table table-hover">
                    <thead class="bg-info">
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Service</th>
                        <th>Matricale</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <td>
                            assma 
                        </td>
                        <td>daaif</td>
                        <td>20ans</td>
                        <td>Informatique</td>
                        <td>Developpement</td>
                        <td>
                            <a href="" class="btn btn-warning"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-pencil " aria-hidden="true"></i></a>
                    </td>
                    </tbody>
                </table>
                   </div>
               </div><a href="add.php"><button type="submit" class="btn btn-primary mt-3">Ajouer</button>
            </a>
            </div>
            
        </div>
    </div>
    
<?php 

include('../include/footer.php')
?>