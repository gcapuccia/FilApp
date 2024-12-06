<?php
ob_start();
require_once '../Login/session_habilitada.php';
require_once '../../php/Conexiones/conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM empleados WHERE id = '".$id."'";
$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));

$qwe = mysqli_affected_rows($link);

if($qwe > 0){
    header("Location: ../listaEmpleado.php");
}else{
    echo "se produjo un error";
}

?>