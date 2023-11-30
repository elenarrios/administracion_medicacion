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
        <h1>AGREGAR TRABAJADOR</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <form action="agregar4.php" method="GET">
            <div class="mb-3">
              <label for="exampleInputEmail1"  class="form-label">Nombre</label>
              <input name="nombre_completo" type="text" class="form-control" id="exampleInputPassword1" placeholder="nombre">
            </div>
            <div class="mb-3">
              <label for="exampleInputPasswor1" class="form-label">DNI</label>
              <input name="dni" type="text" class="form-control" id="exampleInputPaaword1" placeholder="DNI">
            </div>
            <div class="mb-3">
              <label for="exampleInputPasswor1" class="form-label">Direccion</label>
              <input name="direccion" type="text" class="form-control" id="exampleInputPaaword1" placeholder="direccion">
            </div>
            <div class="mb-3">
              <label for="exampleInputPasswor1" class="form-label">Telefono</label>
              <input name="tel" type="text" class="form-control" id="exampleInputPaaword1" placeholder="telefono">
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
