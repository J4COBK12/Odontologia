<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Semestre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="vistaProfes2.php">-</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="crear-semestre.php">Crear Semestre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asignaturas.php">Asignaturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="procesos.php">Procesos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="autorizar.php">Autorizar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-10 main-content">
        <h2>Crear Semestre</h2>
        <div class="form-container">
            <form action="procesar-crear-semestre.php" method="POST">
                <div class="form-group">
                    <label for="nombreAsignatura">Nombre de la Asignatura:</label>
                    <input type="text" class="form-control" id="nombreAsignatura" name="nombreAsignatura" required>
                </div>
                <div class="form-group">
                    <label for="periodo">Periodo:</label>
                    <select class="form-control" id="periodo" name="periodo" required>
                        <option value="I Periodo">I Periodo</option>
                        <option value="Vacacional">Vacacional</option>
                        <option value="II Periodo">II Periodo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="codigoAsignatura">Código de Asignatura:</label>
                    <input type="text" class="form-control" id="codigoAsignatura" name="codigoAsignatura" required>
                </div>
                <button type="submit" class="btn btn-primary">Crear Semestre</button>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>