<?php
require "../php/conexion.php";

$id=$_GET['id_receta'];
$idP=$_GET['paciente'];
$idM=$_GET['medicamento'];
$d=$_GET['dosis'];
$fD=$_GET['frec_diaria'];
$pD=$_GET['primera_dosis'];
$e=$_GET['estado'];
$q="INSERT INTO recetas (id_paciente, id_medicamento, dosis, frecuencia_dia, h_primera_dosis, estado) VALUES ($idP, $idM, '$d','$fD', '$pD', '$e')";
$r=mysqli_query($con, $q);

if($r){
   header("location:../recetas/recetas.php");
}
else{
    
}
?>