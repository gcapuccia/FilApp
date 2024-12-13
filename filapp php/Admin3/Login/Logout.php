<?php
ob_start();
session_start();
require_once '../../php/Conexiones/conn.php';

$desconexion = "UPDATE empleados SET UltimoLogin = 0 WHERE Usuario = '".$_SESSION['user']."'";
mysqli_query($link,$desconexion) or die(mysqli_error($link));



session_unset();
session_destroy();



header("Location: Login.html"); // Redirige a la página de inicio de sesión
exit();
?>
