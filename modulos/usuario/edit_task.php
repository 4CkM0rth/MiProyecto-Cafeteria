<?php

    include("db.php");
    $producto = '';
    $descripcion = '';
    $precio = '';
    $cantidad = '';


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM productos WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $producto = $row['producto'];
            $description = $row['descripcion'];
            $precio = $row['precio'];
            $cantidad = $row['cantidad'];

        }
    }

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];


        $query = "UPDATE productos set producto = '$producto', descripcion = '$descripcion', precio = '$precio', cantidad = '$cantidad' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Task Update Succesfully';
        $_SESSION['message_type'] = 'warning';
        header('Location: productos.php');
    }
?>
<?php include('include/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST">
                <div class="form-group">
                    <input name="producto" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Producto Actualizado">
                </div>
                <div class="form-group">
                    <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion;?></textarea>
                </div>
                <div class="form-group">
                    <input name="precio" type="number" class="form-control" value="<?php echo $precio; ?>" placeholder="Precio Actualizado">
                </div>
                <div class="form-group">
                    <input name="cantidad" type="number" class="form-control" value="<?php echo $cantidad; ?>" placeholder="Cantidad Actualizada">
                </div>
                <button class="btn-success" name="update">
                    Actualizar
                </button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php');?>