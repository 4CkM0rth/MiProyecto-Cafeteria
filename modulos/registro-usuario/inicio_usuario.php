<?php include('../../db.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .login-container {
            margin-top: 5%;
            margin-bottom: 5%;
        }
        .login-form-1 {
            padding: 9%;
            background:#282c34;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.8);
            color: #fff;
        }
        .login-form-1 h3 {
            text-align: center;
            color: #fff;
        }
        .btnSubmit {
            font-weight: 600;
            width: 50%;
            color: #282c34;
            background-color: #fff;
            border: none;
            border-radius: 1.5rem;
            padding:2%;
        }
        .btnSubmit:hover {
            color: #fff;
            background-color: #3699ff;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-form-1">
                <h3>Ingreso al Portal</h3>
                <form action="authenticate.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Tu Correo *" name="email" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Tu Contraseña *" name="password" required />
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btnSubmit" value="Iniciar Sesión" />
                    </div>
                    <div><a href="registro_usuario.php" style="color:#fff">Registro Usuario</a></div>
                    <div><a href="../../index.php" style="color:#fff">Inicio</a></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    // Verificar si se envió el formulario de inicio de sesión
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si el inicio de sesión es exitoso
        if ($login_successful) {
            // Inicio de sesión exitoso
            // Redirigir al usuario a la página de cotización
            header("Location: cotizacion/cotizacion.php");
            exit(); // Asegúrate de detener la ejecución del script después de la redirección
        } else {
            // Inicio de sesión fallido
            echo "Error: Inicio de sesión fallido";
        }
    }
    ?>

</body>
</html>
