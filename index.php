<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$request = $_GET['request'] ?? '';

$documentRoot = $_SERVER["DOCUMENT_ROOT"] . "/API_Rest_PHP";

if ($request == 'users') {
    $controllerPath = $documentRoot . "/controllers/UserController.php";

    if (file_exists($controllerPath)) {
        include $controllerPath;
    } else {
        echo json_encode(["error" => "Arquivo UserController.php não encontrado em: " . $controllerPath]);
    }
} else {
    echo json_encode(["message" => "Rota não encontrada"]);
}
?>
