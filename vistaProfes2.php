<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                                    <h4 class="card-title">Estudiante A</h4>
                                    <p class="card-text">Asignatura: Asignatura 1</p>
                                    <p class="card-text">Proceso: Proceso 1</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Estudiante B</h4>
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

    <!-- Agrega los scripts de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
