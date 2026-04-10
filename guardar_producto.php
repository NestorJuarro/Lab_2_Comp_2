<?php
session_start();
require_once "conexion.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);
    $precio = trim($_POST['precio']);
    $cantidad = trim($_POST['cantidad']);

    if (
        empty($nombre) ||
        empty($descripcion) ||
        empty($precio) ||
        empty($cantidad)
    ) {
        header("Location: dashboard.php?error=1");
        exit();
    }

    if (!is_numeric($precio) || $precio <= 0) {
        header("Location: dashboard.php?error=1");
        exit();
    }

    if (!filter_var($cantidad, FILTER_VALIDATE_INT) || $cantidad <= 0) {
        header("Location: dashboard.php?error=1");
        exit();
    }

    $sql = "INSERT INTO productos (nombre, descripcion, precio, cantidad) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $nombre, $descripcion, $precio, $cantidad);

    if ($stmt->execute()) {
        header("Location: dashboard.php?success=1");
        exit();
    } else {
        header("Location: dashboard.php?error=1");
        exit();
    }
}
?>