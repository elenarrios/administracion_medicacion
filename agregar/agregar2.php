<?php
require "../php/conexion.php";

$n=$_GET['nombre_apellido'];
$dni=$_GET['dni'];
$d=$_GET['direccion'];
$t=$_GET['tel'];
$q="INSERT INTO pacientes (nombre_apellido, dni, direccion, telefono) VALUES ('$n', '$dni', '$d', '$t')";
$r=mysqli_query($con, $q);

if($r){
    header("location:../listado/listado.php");
}
else{
    
}
?>