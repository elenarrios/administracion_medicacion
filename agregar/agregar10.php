<?php
require "../php/conexion.php";

$id=$_GET['id_alerta'];
$h=$_GET['horario'];
$f=$_GET['fecha'];
$idT=$_GET['trabajador'];
$idM=$_GET['medicacion'];
$idP=$_GET['paciente'];
$q="INSERT INTO alertas (horario, fecha, id_trabajador, id_medicacion, id_paciente) VALUES ('$h', '$f', '$idT', '$idM', '$idP')";
$r=mysqli_query($con, $q);

if($r){
    header("location:../alertas/alertas.php");
}
else{
    
}
?>