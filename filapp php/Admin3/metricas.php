<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';
require_once '../php/Conexiones/conn.php';
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
<?php 
include 'footer.php';
?>