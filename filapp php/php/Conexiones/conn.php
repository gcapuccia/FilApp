 <?php
    const SERVER = 'localhost';
    const USUARIO = 'root';
    const CLAVE = '';
    const BASE = 'filapp';  
 $link = new mysqli(SERVER,USUARIO,CLAVE,BASE);
    /* $link = mysqli_connect(
                    SERVER,
                    USUARIO,
                    CLAVE,
                    BASE
                    ); */
    mysqli_set_charset($link, 'utf8');
    // Verificar la conexión
     if ($conn->connect_error) {
         die("Conexión fallida: " . $conn->connect_error);
         }
?>