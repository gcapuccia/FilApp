<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';

require_once '../php/Conexiones/conn.php';

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}



?>

<p style="color:red"><?php echo $error ?></p>
<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Motivos de Atencion para el formulario
							</div>
							<div class="full-width panel-content">
								<!-- <form action="listaEmpleado.php" method="GET">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchAdmin">
											<label class="mdl-textfield__label"></label>
										</div>
									</div> -->
<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th>ID</th>
                                <th>Motivo de Atencion</th>
                                <th>Nuevo Dato</th>
                                <th>Modificar</th>
							</tr>
						</thead>
						<tbody>
						        <?php 
									$sql = "SELECT * FROM motivos";
									$respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));		
									while($fila = mysqli_fetch_assoc($respuesta)){
								?>

							<tr>
								<td><?php echo $fila['id']?></td>
                                <td><?php echo $fila['titulo'];?></td>
                                <form action="form/modificarmotivo.php" method="GET">
                                <td><input type="text" name="motivo"></td>
                                <input type="hidden" name="id" value="<?php echo $fila['id']?>">
								<td><input type="submit" value="Modificar"></td>
                                </form>
                            </tr>
							<?php
								} 
							?>
						</tbody>
					</table>
                    </div>
                </div>
            </div>
        </div>

<?php 
include 'footer.php';
?>