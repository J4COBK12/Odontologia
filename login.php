<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2>Iniciar sesión</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="code">Codigo:</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
        <p><a href="olvide-contrasena.php">Olvidé mi contraseña</a></p>
    </div>
</body>

</html>
