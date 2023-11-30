<?php

require "../php/conexion.php";
$ida=$_POST['alerta'];
$u=$_POST['usuario'];
$p=$_POST['contraseña'];

$q="SELECT * from trabajadores WHERE usuario='$u' AND contrasena='$p'";
$r=mysqli_query($con, $q);
    if(mysqli_num_rows($r)>0){
        
        $q="UPDATE  alertas SET cumplida='S' WHERE id_alerta=$ida";
       
        $r2=mysqli_query($con, $q);
        if($r2){
            
            header("location:alertas.php");
        }
        
    }
    else{
        header("location:alertas.php"); 
    }
?>
    