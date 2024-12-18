<?php
require_once 'Login/session_habilitada.php';
include 'headerEmp.php';
require_once '../php/Conexiones/conn.php';
/*
 ?>
 		<section class="full-width header-well">
 			<div class="full-width header-well-icon">
 				<i class="zmdi zmdi-alert-circle-o"></i>
 			</div>
 			<div class="full-width header-well-text">
 				<p class="text-condensedLight">
 					Sitio en construuccion	ACA SE PUEDEN MOSTRAR LAS MISMAS TARJETAS DEL HOME SUPERVISOR 
 						CON LA INFORMACION DEL EMPLEADO: EL TIEMPO PROMEDIO, LA CANTIDAD DE TURNOS ATENDIDOS. LA CANT DE ENCUESTAS SOLO LO VE EL SUP 
 				</p>
 			</div>
 		</section>
 	</section>
	*/

	$user = $_SESSION['user'];

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$hoy = date("d/m/y");
	
	
	/*Busco el tiempo promedio de atencion del usuario en sesion */
	$sqlTma = "SELECT SEC_TO_TIME(FLOOR(AVG(TIMESTAMPDIFF(SECOND, inicioAtencion, finAtencion)))) AS tiempo_medio FROM clientes WHERE usuarioDeAtencion = '".$user."'";
	$respuestaTMA = mysqli_query($link, $sqlTma) or die(mysqli_error($link));
	$tma = mysqli_fetch_array($respuestaTMA);
	

	/*Cuento los clientes que ya esten atendidos y que el usuarioDeAtencion sea igual al usuario en sesion*/
		$sql2 = "SELECT count(enEspera) as contar from clientes where enEspera > 2 AND usuarioDeAtencion = '".$user."'";
		$respuesta2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
		$clientes2 = mysqli_fetch_array($respuesta2);  
	
	?>
	
			<section class="full-width text-center" style="padding: 40px 0;">
				<h3 class="text-center tittles">Metricas del dia de hoy  <?php echo $hoy?></h3>
				<!-- Tiles -->
				
				<article class="full-width tile">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $clientes2[0]; ?><br>
							<small>Clientes atendidos hoy</small>
						</span>
					</div>
					<i class="zmdi zmdi-accounts tile-icon"></i>
				</article>
				<article class="full-width tile">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php echo $tma[0] ?><br>
							<small>Tiempo Medio Atencion</small>
						</span>
					</div>
					<i class="zmdi zmdi-time tile-icon"></i>
				</article>
			</section>
		</section>
		
	
	<?php 
	include 'footer.php';
	?>