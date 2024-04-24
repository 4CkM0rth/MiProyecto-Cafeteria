<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
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
            border-radius: 10px;
        }
        .login-form-1 h3 {
            text-align: center;
            color: #fff;
        }
        .btnSubmit {
            font-weight: 600;
            width: 100%;
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
                <h3>Registro de Usuario</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo electrónico" name="correo" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="userType" style="color: #fff;">Tipo de usuario:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_usuario" id="frequent" value="Frecuente" checked>
                            <label class="form-check-label" for="frequent" style="color: #fff;">
                                Frecuente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_usuario" id="intermediate" value="Intermedio">
                            <label class="form-check-label" for="intermediate" style="color: #fff;">
                                Intermedio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_usuario" id="new" value="Nuevo">
                            <label class="form-check-label" for="new" style="color: #fff;">
                                Nuevo
                            </label>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btnSubmit" value="Registrarse" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include('../../db.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // Preparar la consulta SQL para insertar un nuevo usuario en la tabla
    $sql = "INSERT INTO usuarios (correo, contraseña, tipo_usuario) VALUES (?, ?, ?)";

    // Preparar la sentencia
    $stmt = $pdo->prepare($sql);

    // Ejecutar la sentencia
    $stmt->execute([$correo, $contraseña, $tipo_usuario]);

    // Redireccionar o mostrar un mensaje de éxito
    // Por ejemplo, podrías redireccionar al usuario a una página de inicio de sesión
    header("Location: inicio_usuario.php");
    exit();
}
?>
