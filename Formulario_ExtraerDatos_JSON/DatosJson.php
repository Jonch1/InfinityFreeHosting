<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Datos JSON</title>
</head>
<body>
<h1>Estos son los datos que contiene el JSON</h1>

<?php
// Leer el archivo JSON
$json = file_get_contents('dades');
$datos = json_decode($json, true);

// Extraer los datos
$nom = $datos['nom'];
$edat = $datos['edat'];
$dni = $datos['dni'];
?>

<ul>
    <li><strong>Nombre:</strong> <?php echo $datos->nom; ?></li>
    <li><strong>Edad:</strong> <?php echo $datos->edat; ?></li>
    <li><strong>Dni:</strong> <?php echo $datos->dni; ?></li>
</ul>
</body>
</html>