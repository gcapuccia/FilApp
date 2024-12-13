<?php
require_once '../php/Conexiones/conn.php';
// Consultar datos
$sql = "SELECT motivo FROM clientes GROUP by motivo";
$result = $link->query($sql);

$motivos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $motivos[] = $row['motivo'];
    }
}
?>


<script>
fetch('data/phpdatos.php')
        .then(response => response.json())
        .then(data => {
            const ctx = document.getElementById('Motivos').getContext('2d');
            const ejex = <?php echo json_encode($motivos); ?>;
            /* const ejex = ['Compras', 'Post Venta', 'Asesoramiento', ' de Producto']; */
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ejex /* data.map((_, i) => i + 1) */,
                    datasets: [{
                        label: 'Motivos Atendidos',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });



        fetch('data/phpempleados.php')
        .then(response => response.json())
        .then(data => {
            const ctx = document.getElementById('empleados').getContext('2d');
            const ejex = ['lmansi','rvera'];
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ejex /* data.map((_, i) => i + 1) */,
                    datasets: [{
                        label: 'Cantidad de Atenciones Por Empleado',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });


</script>
	
</body>
</html>