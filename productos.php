<?php include("db.php") ?>
<?php include("include/header.php") ?>

<div class="container p-4">
    <div class="row">
        <!-- Columna del formulario -->
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button", class="close", data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="producto" class="form-control" placeholder="Producto" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="precio" class="form-control" placeholder="Precio" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad disponible" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                </form>
            </div>
        </div>

        <!-- Columna de la tabla -->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad Disponible</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM productos";
                    $result = mysqli_query($conn, $query);    
                    while($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['producto']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['precio']; ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("include/footer.php") ?>
