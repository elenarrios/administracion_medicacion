<?php
$raiz="../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
require "../php/cabecera2.php";
?>
</head>

<body>



<div class="container">
  <div class="row">
  <div class="col-3">

  <section id="" class="aling-items-end">
    <div class="container">
      <div class="row">
        <div class="col-10">
        <br>
        <h1>Trabajadores</h1>
        </div>
        <div></div>
        <div class="col-2">
        <?php 
        echo("<a href='../agregar/agregar3.php?id_trabajador='><svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-person-plus-fill' viewBox='0 0 16 16'><path d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/><path fill-rule='evenodd' d='M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z'/></svg></a> ");
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
      
    </tr>
  </thead>

  <tbody>
    <?php
    require "../php/conexion.php";
    $q= "select * from trabajadores";
    $r=mysqli_query($con, $q);
    while ($valores=mysqli_fetch_array($r)){
      echo("<tr>");
      echo("<th scope=col><a href='../modificar/modificar3.php?id_trabajador=" .$valores['id_trabajador'] . "&funcion=M'><img src='../img/pencil-square.svg'></a></th>");
      echo("<td>") . ("</td>") ;
      echo("<td>" . $valores["id_trabajador"] . "</td>" );
      echo("<td>" . $valores["nombre_completo"] . "</td>" );
      echo("<td>" . $valores["DNI"] . "</td>" );
      echo("<td>" . $valores["direccion"] . "</td>" );
      echo("<td>" . $valores["telefono"] . "</td>" );
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