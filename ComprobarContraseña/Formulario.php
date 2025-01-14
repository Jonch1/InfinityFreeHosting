<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contraseña = $_POST['contraseña'];
}
$password = hash('sha256', $contraseña);

$array = [];

array_push($array, $password);

file_put_contents('datos.txt', $array);


?>
