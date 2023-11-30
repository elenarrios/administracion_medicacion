<?php
require "../php/conexion.php";

$id=$_GET['idM'];
$m=$_GET['medicamento'];
$d=$_GET['dosis'];
$q="UPDATE medicamentos SET medicamento='$m', dosis='$d' WHERE id_medicamento='$id'";
$r=mysqli_query($con, $q);

if($r){
    echo("<script>alert('Medicamento editado')</script>");
    header("location:../medicamentos/medicamentos.php");
}
else{
    
}
?>