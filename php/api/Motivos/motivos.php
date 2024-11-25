<?php
require '../../Conexiones/conn.php';
header("Content-Type: application/json");

try {
    $stmt = $conexion->query("SELECT * FROM motivos");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $response = [
        "status" => "success",
        "data" => $result
    ];
} catch (PDOException $e) {
    $response = [
        "status" => "error",
        "message" => $e->getMessage()
    ];
}

echo json_encode($response);
?>