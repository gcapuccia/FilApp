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

$mail = isset($input['mail']) ? filter_var($input['mail'], FILTER_VALIDATE_EMAIL) : null;
if (!$mail) {
    $errores[] = "El campo 'mail' es obligatorio y debe ser un correo electrónico válido.";
}

$enEspera = 0;

$motivo = isset($input['motivo']) ? filter_var($input['motivo']/* , FILTER_VALIDATE_INT */) : null;
if ($motivo === false) {
    $errores[] = "El campo 'motivo' es obligatorio y debe ser un número entero.";
}


// Verificar que todos los campos requeridos estén presentes y válidos
if ($nombre && $apellido && $mail && $enEspera !== false && $motivo !== false && empty($errores)) {
    try {
        $stmt = $conexion->prepare("INSERT INTO clientes (nombre, apellido, mail, ingreso, enEspera, motivo) VALUES (:nombre, :apellido, :mail, CURRENT_TIMESTAMP, :enEspera, :motivo)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':mail', $mail);
        //$stmt->bindParam(':ingreso', $ingreso);
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
        "errors" => $errores,
        "received_data" => $_GET // Mostrar los datos recibidos para depuración
        
    ];
}

//http://localhost/FilApp/php/api/Pclientes.php?nombre=Juan&apellido=P%C3%A9rez&mail=juan.perez@example.com&ingreso=2024-09-10%2012:00:00&enEspera=1&motivo=2

//reducido
//http://localhost/FilApp/php/api/Pclientes.php?nombre=Lucas&apellido=Mansilla&mail=Lucas.Mansilla@example.com&motivo=3

echo json_encode($response);
?>

