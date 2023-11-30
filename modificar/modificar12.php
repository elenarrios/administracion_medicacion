<?php
require "../php/conexion.php";

$id=$_GET['id_receta'];
$idP=$_GET['paciente'];
$idM=$_GET['medicamento'];
$d=$_GET['dosis'];
$fD=$_GET['frec_diaria'];
$pD=$_GET['primera_dosis'];
$e=$_GET['estado'];
$q="UPDATE recetas SET id_paciente='$idP', id_medicamento='$idM', dosis='$d', frecuencia_dia='$fD', h_primera_dosis='$pD', estado='$e' WHERE id_receta='$id'";
$r=mysqli_query($con, $q);
if($r){
   header("location:../recetas/recetas.php");
}
else{
    
}
?>