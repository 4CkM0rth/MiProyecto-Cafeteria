<?php
include('../../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST['producto'];
    $cantidad = intval($_POST['cantidad']);
    $precio = floatval($_POST['precio']);

    // Obtener el tipo de usuario del usuario actual (supongamos que lo almacenamos en $_SESSION)
    // Aquí deberías implementar tu lógica para obtener el tipo de usuario, por ejemplo, consultando la base de datos

    $tipoUsuario = "Nuevo"; // Esto es un valor de ejemplo, debes obtenerlo de acuerdo a tu lógica

    // Calcular descuento según el tipo de usuario y cantidad de productos
    $descuento = 0;
    if ($tipoUsuario == "Frecuente" && $cantidad > 10) {
        $descuento = 0.2; // 20%
    } elseif ($tipoUsuario == "Intermedio" && $cantidad <= 5) {
        $descuento = 0.1; // 10%
    } elseif ($tipoUsuario == "Nuevo" && $precio <= 50000) {
        $descuento = 0.05; // 5%
    }

    // Calcular el precio final con descuento
    $precioConDescuento = $precio - ($precio * $descuento);

    // Mostrar la cotización
    echo "<h2>Cotización:</h2>";
    echo "<p>Producto: $producto</p>";
    echo "<p>Cantidad: $cantidad</p>";
    echo "<p>Precio Unitario: $precio</p>";
    echo "<p>Descuento Aplicado: " . ($descuento * 100) . "%</p>";
    echo "<p>Precio Final: $precioConDescuento</p>";
}
?>
