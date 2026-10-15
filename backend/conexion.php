<?php

$host = "127.0.0.1";
$base = "primera_base_datos";
$usuario = "root";
$password = "CAMBIAR_PASSWORD";

$conexion = new PDO(
    "mysql:host=$host;dbname=$base;charset=utf8mb4",
    $usuario,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
