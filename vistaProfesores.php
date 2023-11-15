<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Profesores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 menu">
                <h3>Menú</h3>
                <ul class="nav flex-column">
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="crear-semestre.php">Crear Semestre</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="asignaturas.php">Asignaturas</a>
                    </li>
                    <li class="nav-item menu-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="procesosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Procesos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="procesosDropdown">
                            <a class="dropdown-item" href="#">Seguimiento a procesos clínicos endodoncia</a>
                            <a class="dropdown-item" href="#">Seguimiento a procedimientos clínicos periodoncia</a>
                            <a class="dropdown-item" href="#">Seguimiento a procedimiento clínicos rehabilitación operatoria</a>
                            <a class="dropdown-item" href="#">Seguimiento a procedimientos clínicos rehabilitación oral</a>
                            <a class="dropdown-item" href="#">Seguimiento a procedimientos clínicos cirugía</a>
                            <a class="dropdown-item" href="#">Seguimiento a procesos clínicos odontopediatría</a>
                            <a class="dropdown-item" href="#">Seguimiento procedimientos clínicos ortodoncia</a>
                        </div>
                    </li>
                    <li class="nav-item menu-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="autorizarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Autorizar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="autorizarDropdown">
                            <a class="dropdown-item" href="#">Por autorizar</a>
                            <a class="dropdown-item" href="#">Por calificar</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="col-md-10 main-content">
                <h2>Vista de Profesores</h2>
                <!-- Contenido de la vista de profesores -->
                <div class="col-md-10 main-content">
                    <h2>Profesores</h2>
                    <ul class="nav nav-tabs" id="profesoresTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="autorizar-tab" data-toggle="tab" href="#autorizar" role="tab" aria-controls="autorizar" aria-selected="true">Estudiantes por Autorizar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="calificar-tab" data-toggle="tab" href="#calificar" role="tab" aria-controls="calificar" aria-selected="false">Procesos por Calificar</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="profesoresTabsContent">
                        <div class="tab-pane fade show active" id="autorizar" role="tabpanel" aria-labelledby="autorizar-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Estudiante 1</h4>
                                    <p class="card-text">Asignatura: Asignatura 1</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Estudiante 2</h4>
                                    <p class="card-text">Asignatura: Asignatura 2</p>
                                </div>
                            </div>
                            <!-- Agrega más tarjetas de estudiantes por autorizar aquí -->
                        </div>
                        <div class="tab-pane fade" id="calificar" role="tabpanel" aria-labelledby="calificar-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Estudiante 1</h4>
                                    <p class="card-text">Asignatura: Asignatura 1</p>
                                    <p class="card-text">Proceso: Proceso 1</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Estudiante 2</h4>
                                    <p class="card-text">Asignatura: Asignatura 2</p>
                                    <p class="card-text">Proceso: Proceso 2</p>
                                </div>
                            </div>
                            <!-- Agrega más tarjetas de procesos por calificar aquí -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>