<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';

require_once '../php/Conexiones/conn.php';

$sql = "SELECT count(enEspera) from clientes where enEspera < 2";
$respuesta = mysqli_query($link, $sql) or die(mysqli_error($link));

$clientesAT = mysqli_fetch_array($respuesta);


$sql2 = "SELECT count(enEspera) from clientes where enEspera > 2";
$respuesta2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
$clientes2 = mysqli_fetch_array($respuesta2);

$sqlTma = "SELECT SEC_TO_TIME(FLOOR(AVG(TIMESTAMPDIFF(SECOND, inicioAtencion, finAtencion)))) AS tiempo_medio FROM clientes";
$respuestaTMA = mysqli_query($link, $sqlTma) or die(mysqli_error($link));
$tma = mysqli_fetch_array($respuestaTMA);

$sqlDes = "SELECT count(enDescanso) from empleados where enDescanso = 1";
$respuestaDes = mysqli_query($link, $sqlDes) or die(mysqli_error($link));
$descanso = mysqli_fetch_array($respuestaDes);

$sqlLog = "SELECT count(UltimoLogin) from empleados where UltimoLogin = 1";
$sqlLog = mysqli_query($link, $sqlLog) or die(mysqli_error($link));
$Logeado = mysqli_fetch_array($sqlLog);



?>

		<section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles">Bienvenido</h3>
			<!-- Tiles -->
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						<?php echo $clientesAT[0]; ?></php><br>
						<small>Clientes en Fila</small>
					</span>
				</div>
				<i class="zmdi zmdi-account tile-icon"></i>
			</article>
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
					<small>Empleados en Logeado: </small><?php echo $Logeado[0]; ?><br>
					<small>Empleados en Descanso: </small><?php echo $descanso[0]; ?><br>
					</span>
				</div>
				<i class="zmdi zmdi-coffee tile-icon"></i>
			</article>
			<!-- <article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						9<br>
						<small>Encuestas contestadas</small>
					</span>
				</div>
				<i class="zmdi zmdi-file-text tile-icon"></i>
			</article> -->
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