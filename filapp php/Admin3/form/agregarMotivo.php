<?php
ob_start();
require_once '../Login/session_habilitada.php';
require_once '../../php/Conexiones/conn.php';

$sql = "INSERT INTO motivos (titulo, habilitado) Values ('NUEVO MOTIVO', 1)";
$respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));


$qwe = mysqli_affected_rows($link);

if($qwe > 0){
    header("Location: ../opcciones.php");
}else{
    header("Location: ../opcciones.php?error=se produjo un error");
}


?>