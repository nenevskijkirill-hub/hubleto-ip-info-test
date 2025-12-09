<?php

$file = "favorites.json";

if (!file_exists($file)) {
    file_put_contents($file, "[]");
}

$favorites = json_decode(file_get_contents($file), true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $favorites[] = $data;

    file_put_contents($file, json_encode($favorites, JSON_PRETTY_PRINT));

    echo json_encode(["status" => "ok"]);
    exit;
}

echo json_encode($favorites);
