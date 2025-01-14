<?php

    $method = $_SERVER['REQUEST_METHOD'];
    $url = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $url);
    $entrypoint = end($parts);

    if ($entrypoint === "test") {

        switch ($method) {
            case 'GET':
                echo json_encode(["message" => "Operación realizada correctamente"]);
                break;

            case 'POST':
                http_response_code(405);
                echo json_encode(["message" => "Método no permitido"]);
                break;

        }
    }else {
        echo "No has seleccionado un entrypoint";
        http_response_code(404);
    }

?>

