<?php

class FavoriteIP {
    private $file = 'favorites.json';
    private $favorites = [];

    public function __construct() {
        if (file_exists($this->file)) {
            $this->favorites = json_decode(file_get_contents($this->file), true) ?? [];
        }
    }

    public function all() {
        return $this->favorites;
    }

    public function add($ip, $info) {
        $this->favorites[$ip] = $info;
        $this->save();
    }

    private function save() {
        file_put_contents($this->file, json_encode($this->favorites, JSON_PRETTY_PRINT));
    }
}
