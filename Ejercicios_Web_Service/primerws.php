<?php

header('Content-type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$url = parse_url($_SERVER['REQUEST_URI']);
$parts = explode('/', $url['path']);
$entrypoint = end($parts);

switch ($method) {
    case 'GET':
        echo json_encode(["message" => "Operación realizada correctamente"]);
        break;

    case 'POST':
        http_response_code(405);
        echo json_encode(["message" => "Método no permitido"]);
        break;
}
?>

