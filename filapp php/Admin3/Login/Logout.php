<?php
ob_start();
session_start();
session_unset();
session_destroy();
header("Location: Login.html"); // Redirige a la página de inicio de sesión
exit();
?>
