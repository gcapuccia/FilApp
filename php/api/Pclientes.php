<?php
require '../Conexiones/conn.php';
header("Content-Type: application/json");

// Obtener parámetros de la URL
$nombre = isset($_GET['nombre']) ? htmlspecialchars(strip_tags($_GET['nombre'])) : null;
$apellido = isset($_GET['apellido']) ? htmlspecialchars(strip_tags($_GET['apellido'])) : null;
$mail = isset($_GET['mail']) ? filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL) : null;
$ingreso = isset($_GET['ingreso']) ? htmlspecialchars(strip_tags($_GET['ingreso'])) : null;
$enEspera = isset($_GET['enEspera']) ? filter_var($_GET['enEspera'], FILTER_VALIDATE_INT) : null;
$motivo = isset($_GET['motivo']) ? filter_var($_GET['motivo'], FILTER_VALIDATE_INT) : null;

// Verificar que todos los campos requeridos estén presentes y válidos
if ($nombre && $apellido && $mail && $ingreso && $enEspera !== false && $motivo !== false) {
    try {
        $stmt = $conexion->prepare("INSERT INTO clientes (nombre, apellido, mail, ingreso, enEspera, motivo) VALUES (:nombre, :apellido, :mail, :ingreso, :enEspera, :motivo)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':ingreso', $ingreso);
        $stmt->bindParam(':enEspera', $enEspera);
        $stmt->bindParam(':motivo', $motivo);
        $stmt->execute();

        $response = [
            "status" => "success",
            "message" => "Datos insertados correctamente"
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
        "message" => "Datos inválidos o incompletos",
        "received_data" => $_GET // Mostrar los datos recibidos para depuración
    ];
}

echo json_encode($response);
?>

