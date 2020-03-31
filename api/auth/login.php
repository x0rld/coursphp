<?php

require_once __DIR__ . '/../../utils/databases/DatabaseManager.php';
require_once __DIR__ . '/../../services/auth/AuthService.php';

header('Content-Type: application/json');

$raw = file_get_contents('php://input'); // Read the body from the http request
$json = json_decode($raw, true); // Transform the raw string into a json array

if(isset($json['login']) && isset($json['password'])) {

    $manager = new DatabaseManager();
    $service = new AuthService($manager);
    $token = $service->log($json['login'], $json['password']);
    if($token === null) {
        http_response_code(404);
        die();
    }
    echo $token;
} else {
    http_response_code(400);
    die();
}