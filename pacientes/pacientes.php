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

<div class="container">
  <div class="row">
  <div class="col-3">

  <section id="" class="aling-items-end">
    <div class="container">
      <div class="row">
        <div class="col-10">
        <br>  
        <h1>Pacientes</h1>
      </div>
        <div></div>
        <div class="col-2">
        <?php 
        echo("<a href='../agregar/agregar.php?id_paciente='><svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-person-plus-fill' viewBox='0 0 16 16'><path d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/><path fill-rule='evenodd' d='M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z'/></svg></a> ");
        ?>
        </div>
        </div>
        </div>
      </div>
    </div>
  </section>



</div>
<div class="col"></div>
<div class="container">
<table class="table table-borderer border-dark-subtle table-danger" border="2px">
  <thead>
    <tr>
      
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">ID</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">DNI</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Contacto</th>
      <th scope="col">Telefono contacto</th>
      
    </tr>
  </thead>

  <tbody>
    <?php
    require "../php/conexion.php";
    $q= "select * from pacientes";
    $r=mysqli_query($con, $q);
    while ($valores=mysqli_fetch_array($r)){
      echo("<tr>");
      echo("<th scope=col><a href='../modificar/modificar.php?id_paciente=" .$valores['id_paciente'] . "&funcion=M'><img src='../img/pencil-square.svg'></a></th>");
      echo("<td>") . ("</td>") ;
      echo("<td>" . $valores["id_paciente"] . "</td>" );
      echo("<td>" . $valores["nombre_apellido"] . "</td>" );
      echo("<td>" . $valores["DNI"] . "</td>" );
      echo("<td>" . $valores["direccion"] . "</td>" );
      echo("<td>" . $valores["telefono"] . "</td>" );
      echo("<td>" . $valores["contacto"] . "</td>" );
      echo("<td>" . $valores["tel_contacto"] . "</td>" );
      echo("</tr>");
    }

    ?>
    
  </tbody>
</table>
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
<?php
    require "../php/pie.php";
    ?>