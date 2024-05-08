<?php

// Set response content type sebagai JSON
header("Content-Type: application/json");

// Data sederhana untuk diambil
$data = array(
    "nama" => "John Doe",
    "umur" => 30,
    "pekerjaan" => "Developer"
);

// Mengembalikan data dalam bentuk JSON
echo json_encode($data);

