<?php 
include("db.php");

if (isset($_POST['save'])) {
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $query = "INSERT INTO productos (producto, descripcion, precio, cantidad) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die('Error en la preparación de la consulta: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssdi", $producto, $descripcion, $precio, $cantidad);
    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        die('Error al ejecutar la consulta: ' . mysqli_error($conn));
    }

    $_SESSION['message'] = 'Producto Agregado Correctamente';
    $_SESSION['message_type'] = 'Success';
    header('Location: productos.php');
    exit();
}
?>
