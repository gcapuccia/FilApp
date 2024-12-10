<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';
require_once '../php/Conexiones/conn.php';



/*
	Selecciono los clientes en espera por motivo,
	el problema es como saber cuantos motivos hay???!
	tendria que primero hacer un array con los motivos
*/


$sqlmotivos = "SELECT motivo, count(*) as cuenta FROM clientes GROUP by motivo";
$resultado = mysqli_query($link, $sqlmotivos) or die(mysqli_error($link));

// Crear un array para guardar los resultados
$resultados = [];

/* while($fila = mysqli_fetch_array($resultado)){
	$resultados[] = $fila[0];
} */

// Recorremos cada motivo y realizamos la consulta correspondiente
foreach ($motivos as $motivo) {
    $motivoNombre = $motivo['motivo']; // Obtener el nombre del motivo
    $sql = "SELECT COUNT(enEspera) FROM clientes WHERE enEspera < 2 AND motivo LIKE '$motivoNombre'";
    
    $respuesta = mysqli_query($link, $sql) or die(mysqli_error($link));
    $clientesPorMotivo = mysqli_fetch_array($respuesta)[0]; // Obtener el resultado del conteo
    
    // Guardamos el resultado en el array
    $resultados[$motivoNombre] = $clientesPorMotivo;
}


?>


		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-alert-circle-o"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Sitio en construccion	
				</p>
			</div>

		</section>
		<section class="full-width header-well" style="display: flex;">
			<div style="width: 30%; height: 30%;">
				<canvas id="Motivos" width="100px" height="100px"></canvas>
			</div>
			<div style="width: 30%; height: 30%;">
				<canvas id="empleados" width="100px" height="100px"></canvas>
			</div>
		</section>

		
		<section class="full-width header-well" style="display: flex;">
			<div style="width: 30%; height: 30%;">
				<canvas id="Motivos" width="100px" height="100px"></canvas>
			</div>
			<div style="width: 30%; height: 30%;">
				<canvas id="empleados" width="100px" height="100px"></canvas>
			</div>
		</section>
		<section class="full-width text-center" style="padding: 40px 0;">
    <h3 class="text-center tittles">Bienvenido</h3>
    
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

	    <!-- Aquí se generan los articles dinámicamente -->
		<?php while($fila = mysqli_fetch_array($resultado)){ ?>
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    <?php echo $fila[1]; ?><br>
                    <small>Clientes atendidos por <?php echo $fila[0]; ?></small>
                </span>
            </div>
            <i class="zmdi zmdi-account tile-icon"></i>
        </article>
    <?php } ?>
    
</section>
<?php 
include 'footer.php';
?>