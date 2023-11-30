<?php
require "../php/cabecera.php";
require "../php/conexion.php";

$idT=$_GET['id_trabajador'];
$q="SELECT * from trabajadores where id_trabajador=$idT";
$r=mysqli_query($con, $q);

if(mysqli_num_rows($r)>0){
    $valores=mysqli_fetch_array($r);
}
else{

}


$raiz="../";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
</head>
<body>

<?php
require "../php/cabecera2.php";
?>


    <div class="container">
        <h1>MODIFICAR TRABAJADOR</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="modificar4.php" method="GET">
                <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" name="idT" class="form-control" id="exampleImputPassword1"  hidden="true" value= <?php echo($valores["id_trabajador"]); ?>>
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" name="nombre_completo" class="form-control" id="exampleImputPassword1" value= <?php echo($valores["nombre_completo"]); ?>>
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputPassword1" class="form-label">DNI</label>
                        <input type="text" name="dni" class="form-control" id="exampleImputPassword1" value= <?php echo($valores["DNI"]); ?>>
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputPassword1" class="form-label">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="exampleImputPassword1" value= <?php echo($valores["direccion"]); ?>>
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label">Telefono</label>
                        <input type="text" name="tel" class="form-control" id="exampleImputPassword1" value= <?php echo($valores["telefono"]); ?>>
                    </div>
<button type="submit" class="btn btn-primary">MODIFICAR</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Vendor JS Files -->
  <script src="<?=$raiz;?>template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/aos/aos.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=$raiz;?>template/assets/js/main.js"></script>

  <?php
  require "../php/pie.php";
  ?>
</body>
</html>