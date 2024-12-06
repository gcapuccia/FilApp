<?php
require_once "../php/Conexiones/conn.php";


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet"  href="css/cliente.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  
  <title>FilApp - Registro Cliente</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <!-- Formulario de registro -->
  <div id="full-background">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center">
           <img src="assets/img/sinfondo.png" alt="FilApp Logo" class="img-fluid" style="max-width: 200px;">
           <h2 class="text-black mt-3 ">¡Bienvenidos!</h2>
          </div>
          
          <form action="envio.php" method="POST">
            <div class="mb-3">
              <!-- <label for="nombre" class="form-label">Nombre</label> -->
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
              <!-- <label for="apellido" class="form-label">Apellido</label> -->
              <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Apellido" required>
            </div>
            <div class="mb-3">
              <!-- <label for="email" class="form-label">Email</label> -->
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <!-- <label for="motivo" class="form-label">Motivo de registro</label> -->
              <select class="form-select" id="motivo" name="motivo" aria-label="Default select example" required>
                <option selected>Selecciona un motivo</option>
                <?php
                  $sql = "select titulo from motivos";
                  $respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));

                  while($fila = mysqli_fetch_assoc($respuesta)){
                ?>
                <option value="<?php echo $fila['titulo'];?>"><?php echo $fila['titulo'];?></option>
              <?php
                  }
              ?>
              </select>
            </div>
            <button type="submit" class="btn btn-custom w-100">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
 


  <!--Footer-->
  <footer class="text-center text-lg-start bg-light text-muted" id="nosotros">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <!-- <span>Conocenos:</span> -->
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
                Brindamos las herramientas para que organices tu compañia.
            </p>
          </div>
          <div class="col-md-3 col-lg-1 col-xl-1 mx-auto mb-4">
            
            <p>
              <a href="../Empresa/index.html" class="text-reset">Nuestra Pagina</a>
            </p>
            <p>
              <a href="#" class="text-reset">Preguntas Frecuentes</a>
            </p>
            
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            
            <div class="d-flex justify-content-center mt-4">
              <a href="https://twitter.com" rel="noopener" title="x" target="_blank" class="social-btn twitter-btn"><i class="fab fa-twitter"></i></a>
      
              <a href="https://facebook.com" rel="noopener" title="facebook" target="_blank" class="social-btn facebook-btn"><i class="fab fa-facebook-f"></i></a>

              <a href="mailto:correo@ejemplo.com" rel="correo" title="correo" class="social-btn email-btn"><i class="fas fa-envelope"></i></a>
          </div>  
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="https://youtu.be/84MkEfr4NJA">FilApp</a>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

