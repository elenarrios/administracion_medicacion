<?php
require "../php/conexion.php";

$n=$_GET['nombre_completo'];
$dni=$_GET['dni'];
$d=$_GET['direccion'];
$t=$_GET['tel'];
$q="INSERT INTO trabajadores (nombre_completo, DNI, direccion, telefono) VALUES ('$n', '$dni', '$d', '$t')";
$r=mysqli_query($con, $q);

if($r){
    header("location:../trabajadores/trabajadores.php");
}
else{
    
}
?>