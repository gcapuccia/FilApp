<?php
require_once 'Login/session_habilitada.php';
include 'headerEmp.php';

require_once '../php/Conexiones/conn.php';

if (isset($_GET['nocliente'])) {
    $nocliente = 'NO HAY CLIENTE EN ESPERA';
}



                            
/* if (isset($_GET['fin'])) { */                                    
$sql = "SELECT * FROM clientes WHERE usuarioDeAtencion = '".$_SESSION['user']."' and enEspera = 2";
$respuesta = mysqli_query($link,$sql) or die(mysqli_error($link));	
$fila = mysqli_fetch_assoc($respuesta);

if (is_null( $fila['id'])) {
    

?>
        <!-- Tiles -->
        <section class="full-width text-center" style="padding: 10px 0;">
        <article class="full-width tile">
            <a href="form/llamarSiguiente.php" class="tile-text">
                <span class="text-condensedLight">
                    <br>
                    <small>Llamar siguiente</small>
                </span>
            </a>
            <i class="zmdi zmdi-account tile-icon"></i>
        </article>
        <article class="full-width tile">
            <a href="" class="tile-text">
                <span class="text-condensedLight">
                    <br>
                    <small>Tomar descanso</small>
                </span>
            </a>
            <i class="zmdi zmdi-coffee tile-icon"></i>
        </article>
    </section>
    <div class="full-width panel-tittle bg-primary text-center tittles">
    <?php echo $nocliente ?>
        </div>
    
		<?php 
        }else{
        ?>
        <section class="full-width text-center" style="padding: 10px 0;"></section>
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar">
                </div>
                <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
                   
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">
                            <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width panel-tittle bg-primary text-center tittles">
                                    INGRESO UN CLIENTE NUEVO
                                </div>
                                <div class="full-width panel-content">
                                    <form>
                                    
                                        <div class="mdl-grid">
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <span class="mdl-textfield__input" id="nombreCliente"><?php echo $fila['nombre']; ?></span>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <span class="mdl-textfield__input" id="nombreCliente"><?php echo $fila['apellido']; ?></span>
                                                </div>
                                            </div>
											<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <span class="mdl-textfield__input" id="nombreCliente"><?php echo $fila['motivo']; ?></span>
                                                </div>
                                            </div>
												<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <span class="mdl-textfield__input" id="nombreCliente"><?php echo $fila['mail']; ?></span>
                                                </div>
                                            </div>
                                            </div>
                                        
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<section class="full-width text-center" style="padding: 10px 0;">
					<article class="full-width tile">
						<a href="form/FinAtencion.php?id=<?php echo $fila['id']; ?>" class="tile-text">
							<span class="text-condensedLight">
								<br>
								<small>Finalizar turno</small>
							</span>
						</a>
						<i class="zmdi zmdi-timer-off tile-icon"></i>
					</article>
				</section>
                <?php 
                } 
              /*   } */
                
                ?>
		</section>
		
	</section>
