<?php
require '../../Conexiones/conn.php';
header("Content-Type: application/json");

// Obtener el ID del empleado de la URL
$id = isset($_GET['id']) ? filter_var($_GET['id'], FILTER_VALIDATE_INT) : null;

if ($id !== null) {
    try {
        $stmt = $conexion->prepare("DELETE FROM empleados WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $response = [
                "status" => "success",
                "message" => "Empleado eliminado correctamente"
            ];
        } else {
            $response = [
                "status" => "error",
                "message" => "No se encontró el empleado con el ID proporcionado"
            ];
        }
    } catch (PDOException $e) {
        $response = [
            "status" => "error",
            "message" => $e->getMessage()
        ];
    }
} else {
    $response = [
        "status" => "error",
        "message" => "ID inválido o no proporcionado"
    ];
}

echo json_encode($response);
?>
