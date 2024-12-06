<?php
require_once 'Login/session_habilitada.php';
include 'headersup.php';
require_once '../php/Conexiones/conn.php';

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}

?>
<p style="color:red"><?php echo $error ?></p>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabListAdmin" class="mdl-tabs__tab  is-active">Listado</a>
				<a href="#tabNewAdmin" class="mdl-tabs__tab">Nuevo</a>
			</div>
			<div class="mdl-tabs__panel" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Empleado nuevo
							</div>
							<div class="full-width panel-content">
								<form action="form/agregarEmpleado.php" method="post">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Datos personales</legend><br>
									    </div>
									    <div class="mdl-cell mdl-cell--6-col">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="Apellido">
												<label class="mdl-textfield__label" for="LastNameAdmin">Apellido</label>
												<span class="mdl-textfield__error">Invalid last name</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="Nombre">
												<label class="mdl-textfield__label" for="NameAdmin">Nombre</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="email" id="DNIAdmin" value="@filapp.com" name="Mail">
												<label class="mdl-textfield__label" for="DNIAdmin">E-mail</label>
												<span class="mdl-textfield__error">Invalid Mail</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneAdmin" name="idVendedor">
												<label class="mdl-textfield__label" for="phoneAdmin">Id Vendedor</label>
												<span class="mdl-textfield__error">Invalid number</span>
											</div>
										</div>
										
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Datos de la cuenta</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin" name="Usuario">
												<label class="mdl-textfield__label" for="UserNameAdmin">Nombre de usuario</label>
												<span class="mdl-textfield__error">Invalid user name</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="password" id="passwordAdmin" name="pass">
												<label class="mdl-textfield__label" for="passwordAdmin">Password</label>
												<span class="mdl-textfield__error">Invalid password</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Seleccione un icono</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
											<div class="mdl-grid">
												<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
														<input type="radio" id="option-1" class="mdl-radio__button" name="fotoPerfil" value="avatar-male.png">
														<img src="assets/img/avatar-male.png" alt="avatar" style="height: 45px; width:45px;">
														<span class="mdl-radio__label">Avatar 1</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
														<input type="radio" id="option-2" class="mdl-radio__button" name="fotoPerfil" value="avatar-female.png">
														<img src="assets/img/avatar-female.png" alt="avatar" style="height: 45px; width:45px;">
														<span class="mdl-radio__label">Avatar 2</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
														<input type="radio" id="option-3" class="mdl-radio__button" name="fotoPerfil" value="avatar-male2.png">
														<img src="assets/img/avatar-male2.png" alt="avatar" style="height: 45px; width:45px;">
														<span class="mdl-radio__label">Avatar 3</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
														<input type="radio" id="option-4" class="mdl-radio__button" name="fotoPerfil" value="avatar-female2.png">
														<img src="assets/img/avatar-female2.png" alt="avatar" style="height: 45px; width:45px;">
														<span class="mdl-radio__label">Avatar 4</span>
													</label>
											    </div>
											</div>
										</div>
									</div>
									<p class="text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar empleado</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabListAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de empleados
							</div>
							<div class="full-width panel-content">
								<form action="listaEmpleado.php" method="GET">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchAdmin">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>


								<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th>Foto Perfil</th>
                                <th>Nombre Apellido</th>
								<th>Mail</th>
								<th>id Vendedor</th>
								<th>Usuario</th>
								<th>Cargo</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
						<?php 
									$sql = "SELECT * FROM empleados";
									$respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));		
									
									while($fila= mysqli_fetch_assoc($respuesta)){

										if ($fila['idCargo'] == 1) {
											$Cargo = 'Supervisor';
										}else{
											$Cargo = 'Empleado';
										}
								?>

							<tr>
								<td><img src="assets/img/<?php echo $fila['fotoPerfil']; ?>" alt="avatar" style="height: 35px; width:35px;"></td>
								<td><?php echo $fila['Nombre'].' '.$fila['Apellido']; ?></td>
                                <td><?php echo $fila['Mail'];?></td>
								<td><?php echo $fila['idVendedor'];?></td>
								<td><?php echo $fila['Usuario'];?></td>
								<td><?php echo $Cargo ?></td>
								<td><a class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="form/eliminarEmpleado.php?id=<?php echo $fila['id']?>"><i class="zmdi zmdi-alert-octagon"></i></a>Eliminar</td>
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
				</div>
			</div>
		</div>
	</section>
	<?php 
	include 'footer.php';
	?>