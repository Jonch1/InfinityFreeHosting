<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $edat = $_POST['edat'];
    $dni = $_POST['dni'];

    if (empty($nom) || empty($edat) || empty($dni)) {
        echo "Has dejado campos sin rellenar...";
    }

    if (is_numeric($nom) || !is_numeric($edat)) {
        echo "Los valores introducidos no son correctos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h1>Informació introducida</h1>

<h1>Resumen de los Datos Introducidos</h1>

<ul>
    <li><strong>Nombre:</strong> <?php echo $nom; ?></li>
    <li><strong>DNI:</strong> <?php echo $dni; ?></li>
    <li><strong>Edad:</strong> <?php echo $edat; ?></li>
</ul>

</body>
</html>