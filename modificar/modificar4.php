<?php
require "../php/conexion.php";

$id=$_GET['idT'];
$n=$_GET['nombre_completo'];
$dni=$_GET['dni'];
$d=$_GET['direccion'];
$t=$_GET['tel'];
$q="UPDATE trabajadores SET nombre_completo='$n', DNI='$dni', direccion='$d', telefono='$t' WHERE id_trabajador='$id'";
$r=mysqli_query($con, $q);

if($r){
    echo("<script>alert('Trabajador editado')</script>");
    header("location:../trabajadores/trabajadores.php");
}
else{
    
}
?>