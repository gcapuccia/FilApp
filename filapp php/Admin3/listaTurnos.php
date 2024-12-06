<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';
require_once '../php/Conexiones/conn.php';
?>


<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-accounts "></i>
			</div>
			<div class="full-width header-well-text">
				<h2 class="text-condensedLight">
					Listado Clientes En Espera
                </h2>
			</div>
		</section>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric">Fecha y Hora de Fin De Atencion</th>
								<th>Cliente</th>
                                <th>Mail</th>
								<th>Motivo</th>
								<th>Marcar como prioridad</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                                $sql = "select * from clientes where enEspera < 2 order by ingreso asc";
                                $respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));
                                while($fila = mysqli_fetch_assoc($respuesta)){                               
                            ?>
							<tr>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $fila['ingreso'];?></td>
								<td><?php echo $fila['nombre'].' '.$fila['apellido'] ?></td>
                                <td><?php echo $fila['mail'];?></td>
								<td><?php echo $fila['motivo'];?></td>
								<td><input type="checkbox"></td>
								<td><a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="form/eliminarCliente.php?id=<?php echo $fila['id']?>"><i class="zmdi zmdi-alert-octagon"></i></a>Eliminar</td>
							</tr>
                            <?php
                            
                        
                        }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


        <section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-accounts "></i>
			</div>
			<div class="full-width header-well-text">
				<h2 class="text-condensedLight">
					Clientes Atendidos
                </h2>
			</div>
		</section>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric">Fecha y Hora de ingreso</th>
								<th>Cliente</th>
                                <th>Mail</th>
								<th>Motivo</th>
								<th>Usuario de Atencion</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                                $sql = "select * from clientes where enEspera = 3 order by finAtencion asc";
                                $respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));
                                while($fila = mysqli_fetch_assoc($respuesta)){                               
                            ?>
							<tr>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $fila['ingreso'];?></td>
								<td><?php echo $fila['nombre'].' '.$fila['apellido'] ?></td>
                                <td><?php echo $fila['mail'];?></td>
								<td><?php echo $fila['motivo'];?></td>
								<td><?php echo $fila['usuarioDeAtencion'];?></td>
							</tr>
                            <?php
                            
                        }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

<?php 
include 'footer.php';
?>