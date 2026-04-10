<?php
session_start();
require_once "conexion.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$sql = "SELECT * FROM productos ORDER BY fecha_registro DESC";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container panel">
        <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></h2>

        <a href="logout.php" class="logout">Cerrar sesión</a>

        <h3>Registrar Producto</h3>

        <?php if (isset($_GET['success'])): ?>
            <p class="success">Producto guardado correctamente.</p>
        <?php endif; ?>

        <?php if (isset($_GET['error'])): ?>
            <p class="error">Verifica los datos ingresados.</p>
        <?php endif; ?>

        <form action="guardar_producto.php" method="POST">
            <label>Nombre del producto:</label>
            <input type="text" name="nombre" maxlength="100" required>

            <label>Descripción:</label>
            <input type="text" name="descripcion" maxlength="255" required>

            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" min="0.01" required>

            <label>Cantidad:</label>
            <input type="number" name="cantidad" min="1" required>

            <button type="submit">Guardar</button>
        </form>

        <h3>Lista de Productos</h3>

        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($resultado->num_rows > 0): ?>
                        <?php while ($fila = $resultado->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $fila['id']; ?></td>
                                <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($fila['descripcion']); ?></td>
                                <td>$<?php echo number_format($fila['precio'], 2); ?></td>
                                <td><?php echo $fila['cantidad']; ?></td>
                                <td><?php echo $fila['fecha_registro']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No hay productos registrados todavía.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>