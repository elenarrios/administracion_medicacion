  
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
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SAM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
      <ul class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Archivos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=$raiz;?>pacientes/pacientes.php">Pacientes</a></li>
            <li><a class="dropdown-item" href="<?=$raiz;?>trabajadores/trabajadores.php">Trabajadores</a></li>
            <li><a class="dropdown-item" href="<?=$raiz;?>medicamentos/medicamentos.php">Medicamentos</a></li>
            <li><a class="dropdown-item" href="<?=$raiz;?>stock/stock.php">Stock</a></li>
            <li><a class="dropdown-item" href="<?=$raiz;?>alertas/alertas.php">Alertas</a></li>
            <li><a class="dropdown-item" href="<?=$raiz;?>recetas/recetas.php">Recetas</a></li>
          </ul>
</ul>
        <nav id="navbar" class="navbar">
        <a href="../index.php"><button type="button" class="btn btn-danger{" data-bs-toggle="modal"  data-bs-target="#exampleModal">Cerrar sesion</button></a>
      </nav><!-- .navbar -->
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

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