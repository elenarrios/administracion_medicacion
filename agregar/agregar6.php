<?php
require "../php/conexion.php";

$m=$_GET['medicamento'];
$d=$_GET['dosis'];
$f=$_GET['frecuencia'];

$q="INSERT INTO medicamentos (medicamento, dosis, frecuencia) VALUES ('$m', '$d', '$f')";
$r=mysqli_query($con, $q);

if($r){
    header("location:../medicamentos/medicamentos.php");
}
else{
    
}
?>