<?php
$raiz="../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
require "../php/cabecera2.php";
?>

<script src="../jquery/jquery-3.7.0.min.js"></script>

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
        <h1>Alertas</h1>
        </div>
        <div></div>
        <div class="col-2">
        <?php 
        echo("<a href='../agregar/agregar9.php?id_trabajador='><svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-person-plus-fill' viewBox='0 0 16 16'><path d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/><path fill-rule='evenodd' d='M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z'/></svg></a> ");
        ?>
        </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    <label for="exampleSelect1" class="form-label mt-4">Paciente</label>
      <select class="form-select" id="pacientes_alertas" name="id_paciente">
              
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
    <div class="col">
    <div class="form-group">
     <label class="col-form-label mt-4" for="inputDefault">Fecha</label>
    <input type="date" class="form-control" placeholder="Default input" id="fechaActual">
  </div>
    </div>
    <div class="col">
    <a href="generarAlertas.php"><button type="button" class="btn btn-primary">Generar alerta</button></a>
    </div>
  </div>
</div>




   


<div class="container">
<table class="table table-borderer border-dark-subtle" border="2px">
  <thead>
    <tr>
      
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">ID</th>
      <th scope="col">Horario</th>
      <th scope="col">Fecha</th>
      <th scope="col">Medicacion</th>
      <th scope="col">Paciente</th>
      <th scope="col">Cumplido</th>
      <th scope="col"></th>
      
    </tr>
  </thead>

  <tbody id="IdTabla">
    
    
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
  <script src="alertas.js"></script>

</body>
</html>
<?php
    require "../php/pie.php";
    ?>
<form action="bajaAlerta.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="form-group">
  <label class="col-form-label mt-4" for="inputDefault">ID</label>
  <input type="text" name="alerta" id="idAlerta" class="form-control" placeholder="ID">
    </div>
      <div class="form-group">
  <label class="col-form-label mt-4" for="inputDefault">Usuario</label>
  <input type="text" name="usuario" class="form-control" placeholder="usuario">
    </div>
    <div class="form-group">
  <label class="col-form-label mt-4" for="inputDefault">Contraseña</label>
  <input type="password" name="contraseña" class="form-control" placeholder="contraseña">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>