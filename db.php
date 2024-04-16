<?php

session_start();

// Parámetros de conexión
$servername = "localhost";
$username = "root";
$password = "nelita2408";
$dbname = "cafeteria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// } else {
//     echo "¡Conexión exitosa!";
// }
?>
