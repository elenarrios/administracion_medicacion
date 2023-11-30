<?php
$raiz="../";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=$raiz;?>template/assets/img/favicon.png" rel="icon">
  <link href="<?=$raiz;?>template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=$raiz;?>template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=$raiz;?>template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$raiz;?>template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=$raiz;?>template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=$raiz;?>template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=$raiz;?>template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=$raiz;?>template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=$raiz;?>template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>



<?php
require "../php/cabecera2.php";
?>


<br>
<br>
    <div class="container">
        <h1>AGREGAR STOCK</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <form action="agregar8.php" method="GET">
            <div class="mb-3">
            <label for="exampleSelect1" class="form-label mt-4">Paciente</label>
      <select class="form-select" id="exampleSelect1" name="id_paciente">
              
              <?php
              require "../php/conexion.php";
              $q="SELECT * FROM pacientes";
              $r=mysqli_query($con, $q);
              while($valores=mysqli_fetch_array($r)){
                echo('<option value='.$valores['id_paciente'].'>' .$valores['nombre_apellido'] . '</option>');
              }
              ?>
              </select>
              
            </div>
            <div class="mb-3">
            <label for="exampleSelect1" class="form-label mt-4">Medicacion</label>
      <select class="form-select" id="exampleSelect1" name="id_medicacion">
              
              <?php
              require "../php/conexion.php";
              $q="SELECT * FROM medicamentos";
              $r=mysqli_query($con, $q);
              while($valores=mysqli_fetch_array($r)){
                echo('<option value='.$valores['id_medicamento'].'>' .$valores['medicamento'] . '</option>');
              }
              ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPasswor1" class="form-label">Dosis</label>
              <input name="dosis" type="text" class="form-control" id="exampleInputPaaword1" placeholder="dosis">
            </div>
            <div class="mb-3">
              <label for="exampleInputPasswor1" class="form-label">Frecuencia</label>
              <input name="frecuencia" type="text" class="form-control" id="exampleInputPaaword1" placeholder="frecuencia">
            </div>
            <button type="submit" class="btn btn-primary"> AGREGAR </button>
          </form>
        </div>
      </div>
    </div>

<!-- Vendor JS Files -->
<script src="<?=$raiz;?>template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/aos/aos.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=$raiz;?>template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="template/assets/js/main.js"></script>

</body>
</html>
