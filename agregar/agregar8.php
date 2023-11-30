<?php
require "../php/conexion.php";

$idP=$_GET['id_paciente'];
$idM=$_GET['id_medicacion'];
$d=$_GET['dosis'];
$f=$_GET['frecuencia'];
$q="INSERT INTO stock (id_paciente, id_medicacion, dosis, frecuencia) VALUES ('$idP', '$idM', '$d', $f)";
$r=mysqli_query($con, $q);

if($r){
    //header("location:../stock/stock.php");
}
else{
    
}
?>