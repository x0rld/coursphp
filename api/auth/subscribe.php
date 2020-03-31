<?php

require_once  __DIR__ . '/../../utils/databases/DatabaseManager.php';
require_once  __DIR__ . '/../../services/auth/AuthService.php';

header('Content-Type: application/json');

$raw = file_get_contents('php://input'); // Read the body from the http request
$json = json_decode($raw, true); // Transform the raw string into a json array

if(isset($json['login']) && isset($json['password'])) {

    $manager = new DatabaseManager();
    $service = new AuthService($manager);
    $user = $service->subscribe($json['login'], $json['password']);
    if($user === null) {
        http_response_code(409);
        die();
    }
    http_response_code(201);
    echo json_encode($user);
} else {
    http_response_code(400);
    die();
}