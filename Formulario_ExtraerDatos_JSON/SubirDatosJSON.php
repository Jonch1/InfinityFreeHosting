<?php
function json_put_contents($archivo, $datos) {
    // Convierte los datos a formato JSON
    $json = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    if ($json === false) {
        throw new Exception("Error al codificar los datos a JSON: " . json_last_error_msg());
    }

    // Guarda el JSON en el archivo
    $resultado = file_put_contents($archivo, $json);

    if ($resultado === false) {
        throw new Exception("Error al guardar los datos en el archivo: $archivo");
    }

    return $resultado; // Devuelve la cantidad de bytes escritos
}

$datos = [
    "nacionalidad" => "Española",
    "hijos" => 3,
    "habilidades" => ["PHP", "JavaScript", "SQL"]
];

try {
    json_put_contents("Datos.json", $datos);
    echo "Datos guardados con éxito en 'datos.json'.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>