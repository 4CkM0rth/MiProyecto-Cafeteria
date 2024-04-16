<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "1075209301";
$dbname = "delicious_bread";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}


?>
