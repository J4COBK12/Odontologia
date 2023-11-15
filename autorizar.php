<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizar</title>
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
                        <a class="nav-link active" href="autorizar.php">Autorizar</a>
                    </li>                 
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Estudiantes por Autorizar</h2>
                <!-- Aquí puedes agregar el contenido de los estudiantes por autorizar -->
                <div class="estudiante-autorizar">
                    <h3>Estudiante Uno</h3>
                    <p>Asignatura: Asignatura Uno</p>
                    <p>Procedimiento Realizado: Procedimiento Uno</p>
                </div>
                <div class="estudiante-autorizar">
                    <h3>Estudiante Dos</h3>
                    <p>Asignatura: Asignatura Dos</p>
                    <p>Procedimiento Realizado: Procedimiento Dos</p>
                </div>
                <div class="estudiante-autorizar">
                    <h3>Estudiante Tres</h3>
                    <p>Asignatura: Asignatura Tres</p>
                    <p>Procedimiento Realizado: Procedimiento Tres</p>
                </div>
                <!-- Repite esta estructura para cada estudiante por autorizar -->
            </div>
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
