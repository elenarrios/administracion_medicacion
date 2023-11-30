<?php

require "../php/conexion.php";

$idP=$_GET['nameIdPaciente'];
$f=$_GET['nameFecha'];
$q= "SELECT * FROM alertas, medicamentos, pacientes where alertas.id_medicamento=medicamentos.id_medicamento AND alertas.id_paciente=pacientes.id_paciente AND fecha='$f' AND alertas.id_paciente = $idP";

$r=mysqli_query($con, $q);
$array = [];
while ($valores = mysqli_fetch_assoc($r)){
    $array[]= $valores;
}
echo json_encode($array);

?>