    <?php 

include('../include/header.php');
require_once('../app/employee.php');
// include('../app/employee.php');
require_once('../app/data.php');

$err=[];
if(isset($_POST['submit'])){
if(isset($_POST['submit'])){
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Age=$_POST['Age'];
$Service=$_POST['Service'];
$Matricale=$_POST['Matricale'];
 $nex = new Employee();
 $nex->addEmployee($Nom, $Prenom, $Age, $Service, $Matricale);
 
}
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <h3 class="card-title">
                        Ajouter un employee
                    </h3>
                    <div class="card-body">
                        <form action="add.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Nom</label>
                                <input class="form-control" type="text" name="Nom" id="">

                            </div>
                            <div class="form-group mb-3">
                                <label for="">Prenom</label>
                                <input class="form-control" type="text" name="Prenom" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Age</label>
                                <input class="form-control" type="number" name="Age" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Service</label>
                                <input class="form-control" type="text" name="Service" id="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mtricale</label>
                                <input class="form-control" type="text" name="Matricale" id="">
                            </div>
                            <button type="submit" name="submit">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 

include('../include/footer.php')
?>