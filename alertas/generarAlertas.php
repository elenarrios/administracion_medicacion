
<?php

require "../php/conexion.php";

$q= "SELECT * FROM recetas WHERE estado='A'";
$r=mysqli_query($con, $q);
while ($valores = mysqli_fetch_array($r)){
    $intervalo=24/$valores['frecuencia_dia'];
    for ($i=1; $i<=$valores['frecuencia_dia']; $i++ ){
        if($i==1){
            $hora=$valores['h_primera_dosis'];
        }
        else{
            $hora=$hora+$intervalo;
        }
        //echo($valores['id_receta']. '-' .$hora . '<br>');

    $fecha=date('Y-m-d');    
    $q="INSERT INTO alertas (horario, fecha, id_trabajador, id_medicamento, id_paciente) VALUES ($hora, '$fecha', 0, " . $valores['id_medicamento'] . ", " . $valores['id_paciente'] . ")";
    $r2=mysqli_query($con, $q);

    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../template/assets/img/favicon.png" rel="icon">
  <link href="../template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="/bootstrap/bootstrap.min.css">
</head>

<body>
<div class="container">
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Alerta generada</h5>
    <p class="card-text">Las alertas correspondientes fueron creadas con exito</p>
    <a href="alertas.php" class="btn btn-primary">OK</a>
  </div>
</div>
</div>
</body>
<script src="bootstrap.bundle.min.js"></script>
 <!-- Vendor JS Files -->
 <script src="../template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../template/assets/vendor/aos/aos.js"></script>
  <script src="../template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="..7template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../template/assets/js/main.js"></script>

</html>