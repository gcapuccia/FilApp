<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';
require_once '../php/Conexiones/conn.php';



/*
	Selecciono los clientes en espera por motivo,
	el problema es como saber cuantos motivos hay???!
	tendria que primero hacer un array con los motivos
*/


$sqlmotivos = "SELECT motivo, count(*) as cuenta FROM clientes where enEspera = 3 GROUP by motivo";
$resultado = mysqli_query($link, $sqlmotivos) or die(mysqli_error($link));

$sql2 = "SELECT count(enEspera) from clientes where enEspera > 2";
$respuesta2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
$clientes2 = mysqli_fetch_array($respuesta2);
/* 
// Crear un array para guardar los resultados
$resultados = [];

while($fila = mysqli_fetch_array($resultado)){
	$resultados[] = $fila[0];
} 


foreach ($motivos as $motivo) {
    $motivoNombre = $motivo['motivo']; 
    $sql = "SELECT COUNT(enEspera) FROM clientes WHERE enEspera < 2 AND motivo LIKE '$motivoNombre'";
    
    $respuesta = mysqli_query($link, $sql) or die(mysqli_error($link));
    $clientesPorMotivo = mysqli_fetch_array($respuesta)[0];
    
   
    $resultados[$motivoNombre] = $clientesPorMotivo;
}*/


?>


		

		<!-- Aquí se generan los articles dinámicamente Muestro cantidad por motivo en cada tarjeta-->
		<h3 class="text-center tittles">Clientes Atendidos Por Motivo</h3>
		<section class="full-width text-center" style="padding: 10px 0; display: flex;">
		<!-- <section class="full-width text-center" > -->
			<div style="width: 30%; height: 30%; display: inline;">
				<canvas id="Motivos" width="50%" height="50%"></canvas>
			</div>
		<!-- </section> -->
		<section class="full-width text-center">
		<?php while($fila = mysqli_fetch_array($resultado)){ ?>
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    <?php echo $fila[1]; ?><br>
                    <small> <?php echo $fila[0]; ?></small>
                </span>
            </div>
            <i class="zmdi zmdi-account tile-icon"></i>
        </article>
    <?php } ?>
		</section>
		</section>

		<!-- Coloco grafico de barras de motivos atendidos -->
		 
		<h3 class="text-center tittles">Clienes Atendidos Por Empleado </h3>
		<section class="full-width text-center" style="padding: 10px 0; display: flex; align-items: center; justify-content: space-evenly;">		
		<!-- Coloco grafico de torta -->
		 		<!-- <section class="full-width header-well" >	 -->		
				 <div style="width: 30%; height: 30%; display: inline;">
				<canvas id="empleados" width="50%" height="50%"></canvas>
			</div>
		<!-- </section> -->
		<section class="full-width text-center" style="padding: 10px 0;">
		<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						<?php echo $clientes2[0]; ?><br>
						<small>Clientes atendidos hoy</small>
					</span>
				</div>
				<i class="zmdi zmdi-accounts tile-icon"></i>
			</article>

		</section>

		
		</section>

    
    
    <!-- Aquí se generan los articles dinámicamente NO FUNCIONA -->
     <?php foreach ($resultados as $motivo => $cantidad): ?>
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    <?php echo $cantidad; ?><br>
                    <small>Clientes atendidos por <?php echo $motivo; ?></small>
                </span>
            </div>
            <i class="zmdi zmdi-account tile-icon"></i>
        </article>
    <?php endforeach; ?> 

	    
    
</section>
<?php 
include 'footer.php';
?>