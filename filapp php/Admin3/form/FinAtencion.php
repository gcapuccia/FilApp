<?php
ob_start();
require_once '../Login/session_habilitada.php';
require_once '../../php/Conexiones/conn.php';

$id = $_GET['id'];


$sqlfin = "UPDATE clientes SET finAtencion = CURRENT_TIMESTAMP, enEspera = '3' WHERE id = ".$id."";
$resultado = mysqli_query($link,$sqlfin) or die(mysqli_error($link));

$qwe = mysqli_affected_rows($link);

if($qwe > 0){
    header("Location: ../homeEmpleado.php");
}else{
    echo "se produjo un error";
}

?>