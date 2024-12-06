<?php
ob_start();
require_once '../Login/session_habilitada.php';
require_once '../../php/Conexiones/conn.php';



$sqlCliente = "select * from clientes where enEspera = '0'";
$resultado = mysqli_query($link,$sqlCliente) or die(mysqli_error($link));
$id = mysqli_fetch_assoc($resultado);

if(!is_null($id['id'])){
    
$sqltomar = "UPDATE clientes SET inicioAtencion = CURRENT_TIMESTAMP, usuarioDeAtencion = '".$_SESSION['user']."', enEspera = '2' WHERE id = ".$id['id']."";
$resultado = mysqli_query($link,$sqltomar) or die(mysqli_error($link));
$qwe = mysqli_affected_rows($link);

if($qwe > 0){
    header("Location: ../homeEmpleado.php");
}
}else{
    header("Location: ../homeEmpleado.php?nocliente");
}




?>