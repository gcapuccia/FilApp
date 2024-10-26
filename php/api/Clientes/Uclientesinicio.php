<?php
require '../../Conexiones/conn.php';
header("Content-Type: application/json");

// Obtener el ID, usuario de atención y enEspera de la URL
$id = isset($_GET['id']) ? filter_var($_GET['id'], FILTER_VALIDATE_INT) : null;
$usuarioDeAtencion = isset($_GET['usuarioDeAtencion']) ? htmlspecialchars(strip_tags($_GET['usuarioDeAtencion'])) : null;
//$enEspera = isset($_GET['enEspera']) ? filter_var($_GET['enEspera'], FILTER_VALIDATE_INT) : null;
$enEspera = 2;

if ($id !== null && $usuarioDeAtencion !== null && $enEspera !== null) {
    try {
        $stmt = $conexion->prepare("UPDATE clientes SET inicioAtencion = CURRENT_TIMESTAMP, usuarioDeAtencion = :usuarioDeAtencion, enEspera = :enEspera WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':usuarioDeAtencion', $usuarioDeAtencion);
        $stmt->bindParam(':enEspera', $enEspera);
        $stmt->execute();

        $response = [
            "status" => "success",
            "message" => "Registro actualizado correctamente"
        ];
    } catch (PDOException $e) {
        $response = [
            "status" => "error",
            "message" => $e->getMessage()
        ];
    }
} else {
    $response = [
        "status" => "error",
        "message" => "ID, usuario de atención o enEspera inválido o no proporcionado"
    ];
}

echo json_encode($response);

//http://tu_dominio/api/update.php?id=2&usuarioDeAtencion=gcapucci&enEspera=3
?>