<?php
ob_start();
require_once '../Login/session_habilitada.php';
require_once '../../php/Conexiones/conn.php';

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$idVendedor = $_POST['idVendedor'];
$Mail = $_POST['Mail'];
$Usuario = $_POST['Usuario'];
$pass = $_POST['pass'];
$fotoPerfil = $_POST['fotoPerfil'];

if ($_SESSION['Cargo'] == 1) {
$sql = "INSERT INTO empleados (Nombre, Apellido, Usuario, pass, idCargo, idVendedor, Mail, fotoPerfil, UserCreador) 
Values ('".$Nombre."', '".$Apellido."', '".$Usuario."', '".$pass."', 2, '".$idVendedor."', '".$Mail."', '".$fotoPerfil."', '".$_SESSION['user']."')";
$respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));
}

$qwe = mysqli_affected_rows($link);

if($qwe > 0){
    header("Location: ../listaEmpleado.php");
}else{
    header("Location: ../listaEmpleado.php?error=se produjo un error");
}

?>