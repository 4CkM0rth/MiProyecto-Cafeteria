<?php include('../../db.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización en Stock</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">Cotización en Stock</h5>
            </div>
            <div class="card-body">
                <form action="procesar_cotizacion.php" method="POST">
                    <div class="form-group">
                        <label for="productName">Producto:</label>
                        <input type="text" class="form-control" id="productName" name="productName" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Precio:</label>
                        <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="discount">Descuento (%):</label>
                        <input type="number" class="form-control" id="discount" name="discount" min="0" max="100" step="0.01">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calcular Cotización</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
