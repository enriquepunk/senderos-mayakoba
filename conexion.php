<?php
$sql = new mysqli("localhost", "root", "WccyKg4pDQ", "mayakoba");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

?>