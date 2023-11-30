<?php
require "../php/conexion.php";

$id=$_GET['id'];
$n=$_GET['nombre_apellido'];
$dni=$_GET['dni'];
$d=$_GET['direccion'];
$t=$_GET['tel'];
$c=$_GET['contacto'];
$tc=$_GET['tel_contacto'];
$q="UPDATE pacientes SET nombre_apellido='$n', DNI='$dni', direccion='$d', telefono='$t', contacto='$c', tel_contacto='$tc' WHERE id_paciente='$id'";
$r=mysqli_query($con, $q);

if($r){
    echo("<script>alert('Paciente editado')</script>");
    header("location:../listado/listado.php");
}
else{
    
}
?>