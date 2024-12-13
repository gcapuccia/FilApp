<?php
ob_start();
session_start();



			include '../../php/Conexiones/conn.php';	
			

			if (isset($_POST['Usuario'])) {
				$Usuario = $_POST['Usuario'];
			}else {
				header('Location: Login.html?error=1');
			}
			
			if (isset($_POST['pass'])) {
				$pass = $_POST['pass'];
			}else {
				header('Location: Login.html?error=1'); 
			}

			echo $Usuario;
			echo $pass;
            
            $sql ="SELECT Nombre, Apellido, Usuario, pass, idCargo FROM empleados WHERE Usuario = '".$Usuario."'";
			$resultado = mysqli_query($link, $sql);
			$fila = mysqli_fetch_assoc($resultado);
			
			echo $fila['Usuario'];
			echo $fila['Nombre'];
			echo $fila['pass'];
			echo $fila['idCargo'];
			
			
			  if (isset($fila['Usuario'])) {	 
				echo "entro en usuario"; 
					if ($fila['pass'] == $pass) {
					echo "entro a pass";
					$NA = $fila['Nombre']. ' ' . $fila['Apellido'];
					$_SESSION['loggedin'] = true;
					$_SESSION['name'] = $NA;
					$_SESSION['user'] = $fila['Usuario'];
					$_SESSION['start'] = time();
					$_SESSION['expire'] = $_SESSION['start'] + (600 * 600);
					$_SESSION['Cargo'] = $fila['idCargo'];
					$_SESSION['foto'] = $fila['fotoPerfil'];
					
					$desconexion = "UPDATE empleados SET UltimoLogin = 1 WHERE Usuario = '".$fila['Usuario']."'";
					mysqli_query($link,$desconexion) or die(mysqli_error($link));


					if ($fila['idCargo'] == '1') {
						echo "entro en id cargo";
						header("Location: ../homeSup.php");
					}else {
						header("Location: ../homeEmpleado.php");
					}
					
				}else {
					echo "entro salida else";
					header("Location: Login.html?error=1"); 
				}
			} else {
				echo "entro salida else";
				header("Location: Login.html?error=1");
				}


?>