<?php

$file = 'favorites.json';

$favorites = [];
if (file_exists($file)) {
    $favorites = json_decode(file_get_contents($file), true);
    if (!$favorites) $favorites = [];
}

header('Content-Type: application/json');
echo json_encode($favorites);

