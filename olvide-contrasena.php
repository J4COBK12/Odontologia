<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvidé mi contraseña</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2>Olvidé mi contraseña</h2>
        <form action="reset-password.php" method="POST">

           

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="code">Código:</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
            <button type="submit" class="btn btn-primary">Restablecer Contraseña</button>
            <a href="login.php">Volver</a>
        </form>
    </div>
</body>

</html>