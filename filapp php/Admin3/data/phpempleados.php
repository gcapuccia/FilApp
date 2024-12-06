<?php

require_once '../../php/Conexiones/conn.php';

// Consultar datos
$sql = "SELECT usuarioDeAtencion, count(*) as cuenta FROM clientes GROUP by usuarioDeAtencion";
$result = $link->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row['cuenta'];
    }
}

echo json_encode($data);
$conn->close();
?>
