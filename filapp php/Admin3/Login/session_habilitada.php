<?php 
session_start();

if (isset($_SESSION['loggedin'])) {  
    
    }else {
        header('Location: Login/Login.html');
        exit;
    }
    // comprobar la hora ahora cuando se inicia la página check-login.php
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>¡Tu sesión ha caducado!</h4>
        <p><a href='Login/Login.html'>Entre aquí</a></p></div>";
        exit;
        }
 ?>