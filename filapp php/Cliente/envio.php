<?php
ob_start();
require '../php/Conexiones/conn.php';

$nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$mail = $_POST['email'];
$motivo = $_POST['motivo'];

$sql = 'INSERT INTO `clientes` (`nombre`, `apellido`, `mail`, `ingreso`, `enEspera`, `motivo`) 
VALUES ("'.$nombre.'", "'.$Apellido.'", "'.$mail.'", CURRENT_TIMESTAMP, 0, "'.$motivo.'")';
mysqli_query($link, $sql) or die(mysqli_error($link));

$ultimocliente = "Select ingreso From clientes order by id desc";
$res = mysqli_query($link, $ultimocliente) or die(mysqli_error($link));
$ultimoingreso = mysqli_fetch_array($res);

if (mysqli_affected_rows($link) != 0) {
    header('Location: Exitoso/exitoso.php?ingreso='.$ultimoingreso[0]);
    exit();
}else{
    header('Location: Fallido/fallido.html');
    exit();
}

?>
