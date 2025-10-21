<?php
namespace Src\Controllers;

class UserController {
    public function index() {
        // Tambahkan header JSON
        header('Content-Type: application/json');
        echo json_encode([
            "success" => true,
            "data" => [
                ["id" => 1, "name" => "Admin", "email" => "admin@example.com"], 
                ["id" => 2, "name" => "Novi", "email" => "novi@example.com"]
            ]
        ]);
    }

    public function show($id) {
        header('Content-Type: application/json');
        echo json_encode([
            "success" => true,
            "data" => ["id" => $id, "name" => "User $id", "email" => "user$id@example.com"]
        ]);
    }
}