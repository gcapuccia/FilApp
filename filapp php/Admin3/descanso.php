<?php
require_once 'Login/session_habilitada.php';
include 'headerEmp.php';
require_once '../php/Conexiones/conn.php';

$sqldescanso = "UPDATE empleados SET enDescanso = 1 WHERE Usuario = '".$_SESSION['user']."'";
$resultado = mysqli_query($link,$sqldescanso) or die(mysqli_error($link));


?>

    <section class="full-width text-center" style="padding: 10px 0;">
        <div class="full-width panel-tittle bg-primary text-center tittles">
            <h3 class="text-center tittles">Estas en Descanso</h3>
        </div>
    </section>
<div class="cronometro" id="cronometro">00:00:00</div> 
<script src="cronometro.js"></script>

    <section class="full-width text-center" style="padding: 50px 0;">
        <article class="full-width tile">
            <a href="homeEmpleado.php?FinDescanso=0" class="tile-text">
                <span class="text-condensedLight">
                    <br>
                    <small>Volver al Trabajo</small>
                </span>
            </a>
            <i class="zmdi zmdi-coffee tile-icon"></i>
        </article>
    </section>

<script>
window.onload = function() {
    // Obtener el elemento del cronómetro
    var cronometro = document.getElementById('cronometro');
    
    // Inicializar variables de tiempo
    var segundos = 0;
    var minutos = 0;
    var horas = 0;

    // Función para agregar un cero delante de números menores a 10
    function agregarCero(i) {
        return (i < 10) ? "0" + i : i;
    }

    // Función para actualizar el cronómetro
    function actualizarCronometro() {
        segundos++;
        if (segundos >= 60) {
            segundos = 0;
            minutos++;
            if (minutos >= 60) {
                minutos = 0;
                horas++;
            }
        }
        
        // Actualizar el contenido del cronómetro
        cronometro.textContent = agregarCero(horas) + ":" + agregarCero(minutos) + ":" + agregarCero(segundos);
    }

    // Iniciar el cronómetro
    setInterval(actualizarCronometro, 1000);
}
    
</script>

<?php 
include 'footer.php';
?>