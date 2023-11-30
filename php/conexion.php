<?php
$ip="localhost";
$u="root";
$p="";
$db="admin_medicacion";
$con=mysqli_connect($ip,$u,$p,$db);
if(mysqli_connect_errno()){
echo('conexion fallida');  
exit();
}
?>