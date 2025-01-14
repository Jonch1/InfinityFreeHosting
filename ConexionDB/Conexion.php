<?php

$conexion = mysqli_connect("d939ebf6a741", "lupa", "1234", "pruebas");

// COMPROBAMOS LA CONEXIÓN
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

?>
