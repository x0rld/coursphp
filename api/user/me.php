<?php

require_once __DIR__ . '/../../utils/databases/DatabaseManager.php';
require_once __DIR__ . '/../../services/auth/AuthService.php';

header('Content-Type: application/json');

$raw = file_get_contents('php://input'); // Read the body from the http request
$json = json_decode($raw, true); // Transform the raw string into a json array

if(isset($json['token'])) {
    $manager = new DatabaseManager();
    $service = new AuthService($manager);
    $userId = $service->getUserIdFromToken($json['token']);
    if($userId === -1) {
        http_response_code(403);
        die();
    }
    // TODO
    echo json_encode([
        'id' => $userId,
    ]);
} else {
    http_response_code(401);
    die();
}