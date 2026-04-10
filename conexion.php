<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "laboratorio2_php";

$conn = new mysqli($host, $usuario, $contrasena, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>