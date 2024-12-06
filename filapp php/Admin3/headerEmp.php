<?php
require_once 'Login/session_habilitada.php';


if ($_SESSION['Cargo'] == 2) {
    $cargo = "Empleado";
}else{
    $cargo = "Supervisor";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Empleado home</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
	<script src="js/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
	</section>
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> FilApp 
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="assets/img/avatar-male2.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption>
					<span>
						<?php echo $_SESSION['name'].'<br> <small>'.$cargo.'</small>'.'<br> <small>'.$_SESSION['user'].'</small>';?>						
					</span>
					
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="homeEmpleado.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								INICIO
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>					
					<li class="full-width">
						<a href="metricasEmpleado.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-chart "></i>
							</div>
							<div class="navLateral-body-cr">
								METRICAS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<!-- <li class="full-width">
						<a href="listaTurnos.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-accounts"></i>
							</div>
							<div class="navLateral-body-cr">
								LISTA DE TURNOS
							</div>
						</a>
					</li> -->
					<figure class="full-width navLateral-body-tittle-menu">
						<div>
							<img src="assets/img/Logo3.jpeg" alt="Avatar" class="circular-image">
						</div>
					</figure>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent"><div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
				<div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">LogOut</div>
						</li>
						<li class="text-condensedLight noLink" ><small><?php echo $_SESSION['name'];?></small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/avatar-male2.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		
        <section class="full-width text-center" style="padding: 10px 0;"></section>