<?php
require '../../Conexiones/conn.php';
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);

// Función para limpiar y validar datos
function validar_dato($dato) {
    return htmlspecialchars(strip_tags(trim($dato)));
}

// Inicializar un array para los errores
$errores = [];

// Validar cada campo y agregar errores si es necesario
$nombre = isset($input['nombre']) ? validar_dato($input['nombre']) : null;
if (!$nombre) {
    $errores[] = "El campo 'nombre' es obligatorio.";
}

$apellido = isset($input['apellido']) ? validar_dato($input['apellido']) : null;
if (!$apellido) {
    $errores[] = "El campo 'apellido' es obligatorio.";
}

$usuario = isset($input['usuario']) ? validar_dato($input['usuario']) : null;
if (!$usuario) {
    $errores[] = "El campo 'usuario' es obligatorio.";
}

$pass = isset($input['pass']) ? validar_dato($input['pass']) : null;
if (!$pass) {
    $errores[] = "El campo 'pass' es obligatorio.";
}

$idCargo = isset($input['idCargo']) ? filter_var($input['idCargo'], FILTER_VALIDATE_INT) : null;
if ($idCargo === false) {
    $errores[] = "El campo 'idCargo' es obligatorio y debe ser un número entero.";
}

$idVendedor = isset($input['idVendedor']) ? filter_var($input['idVendedor'], FILTER_VALIDATE_INT) : null;
if ($idVendedor === false) {
    $errores[] = "El campo 'idVendedor' es obligatorio y debe ser un número entero.";
}

$mail = isset($input['mail']) ? filter_var($input['mail'], FILTER_VALIDATE_EMAIL) : null;
if (!$mail) {
    $errores[] = "El campo 'mail' es obligatorio y debe ser un correo electrónico válido.";
}

$userCreador = isset($input['userCreador']) ? validar_dato($input['userCreador']) : null;
if (!$userCreador) {
    $errores[] = "El campo 'userCreador' es obligatorio.";
}

// Verificar si hay errores
if (empty($errores)) {
    try {
        $stmt = $conexion->prepare("INSERT INTO empleados (nombre, apellido, usuario, pass, idCargo, idVendedor, mail, userCreador) VALUES (:nombre, :apellido, :usuario, :pass, :idCargo, :idVendedor, :mail, :userCreador)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':idCargo', $idCargo);
        $stmt->bindParam(':idVendedor', $idVendedor);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':userCreador', $userCreador);
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
        "errors" => $errores
    ];
}

echo json_encode($response);
?>
