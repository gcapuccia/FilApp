<?php

require_once "../../php/Conexiones/conn.php";

$ingreso = $_GET['ingreso'];


$sql2 = "SELECT count(enEspera) from clientes where enEspera < 2 AND ingreso < '".$ingreso."'";
$respuesta2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
$clientes2 = mysqli_fetch_array($respuesta2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Exito Turno</title>
    <link rel="stylesheet" href="css/exitoso.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

  <div class="container mt-5 mb-5">
    <div class="registro-exitoso col-10 col-sm-8 col-md-6 col-lg-4 mx-auto text-center">
        <div class="icono-tilde" style="font-size: 100px; color: rgb(240, 255, 240);">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
        </div> <!-- Ícono de tilde -->
        <h1 class="h4">Registro Exitoso</h1>
        <p>Hay <?php echo $clientes2[0] ?> Clientes Delante</p>
    </div>
  </div>

    <div class="spacer"></div>

     <!--Footer-->
  <footer class="text-center text-lg-start bg-light text-muted" id="nosotros">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Conocenos:</span>
      </div>   
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>FilApp
            </h6>
            <p>
                Brindamos las herramientas para que organizes tu compañia.
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            
            <p>
              <a href="../../Empresa/index.html" class="text-reset">Nuestra Pagina</a>
            </p>
            <p>
              <a href="#" class="text-reset">Preguntas Frecuentes</a>
            </p>
            
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            
            <div class="d-flex justify-content-center mt-4">
              <a href="https://twitter.com" target="_blank" class="social-btn twitter-btn"><i class="fab fa-twitter"></i></a>
      
              <a href="https://facebook.com" target="_blank" class="social-btn facebook-btn"><i class="fab fa-facebook-f"></i></a>

              <a href="mailto:correo@ejemplo.com" class="social-btn email-btn"><i class="fas fa-envelope"></i></a>
          </div>  
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="https://youtu.be/84MkEfr4NJA">FilAp</a>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
