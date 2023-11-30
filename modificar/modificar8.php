<?php
require "../php/conexion.php";

$id=$_GET['id_stock'];
$idP=$_GET['id_paciente'];
$idM=$_GET['id_medicacion'];
$d=$_GET['dosis'];
$q="UPDATE stock SET id_paciente='$idP', id_medicacion='$idM', dosis='$d' WHERE id_stock='$id'";
$r=mysqli_query($con, $q);

if($r){
    echo("<script>alert('Stock editado')</script>");
    header("location:../stock/stock.php");
}
else{
    
}
?>