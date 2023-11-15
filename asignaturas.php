<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas</title>
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
        <h2>Asignaturas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre de la Asignatura</th>
                    <th>Periodo</th>
                    <th>Código de Asignatura</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Asignatura 1</td>
                    <td>I Periodo</td>
                    <td>Código 1</td>
                </tr>
                <tr>
                    <td>Asignatura 2</td>
                    <td>II Periodo</td>
                    <td>Código 2</td>
                </tr>
                <!-- Agrega más filas con asignaturas aquí -->
            </tbody>
        </table>
    </div>
    </div>
    </div>
</body>

</html>