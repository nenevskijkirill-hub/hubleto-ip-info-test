<?php

$data = json_decode(file_get_contents('php://input'), true);
if (!$data || !isset($data['ip']) || !isset($data['info'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Neplatné dáta']);
    exit;
}


$file = 'favorites.json';

$favorites = [];
if (file_exists($file)) {
    $favorites = json_decode(file_get_contents($file), true);
    if (!$favorites) $favorites = [];
}

$favorites[$data['ip']] = $data['info'];

file_put_contents($file, json_encode($favorites, JSON_PRETTY_PRINT));

echo json_encode(['success' => true]);

