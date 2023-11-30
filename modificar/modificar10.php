<?php
require "../php/conexion.php";

$id=$_GET['id'];
$h=$_GET['horario'];
$f=$_GET['fecha'];
$idT=$_GET['trabajador'];
$idM=$_GET['medicacion'];
$idP=$_GET['paciente'];
$q="UPDATE alertas SET horario='$h', fecha='$f', id_trabajador='$idT', id_medicacion='$idM', id_paciente='$idP' WHERE id_alerta='$id'";
$r=mysqli_query($con, $q);

if($r){
    echo("<script>alert('alerta editada')</script>");
    header("location:../alertas/alertas.php");
}
else{
    
}
?>