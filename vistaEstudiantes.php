<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
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
                        <a class="nav-link" href="autorizar.php">Autorizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="procedimientos.php">Procedimientos</a>
                    </li>               
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Contenido de la vista de estudiante -->
                <div class="col-md-10 main-content">
                    <h2>Estudiante</h2>
                    <ul class="nav nav-tabs" id="estudianteTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="autorizar-tab" data-toggle="tab" href="#autorizar" role="tab" aria-controls="autorizar" aria-selected="true">Procedimientos por Autorizar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="procedimientos-tab" data-toggle="tab" href="#procedimientos" role="tab" aria-controls="procedimientos" aria-selected="false">Procedimientos por Llenar</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="estudianteTabsContent">
                        <div class="tab-pane fade show active" id="autorizar" role="tabpanel" aria-labelledby="autorizar-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Procedimiento 1</h4>
                                    <p class="card-text">Asignatura: Asignatura 1</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Procedimiento 2</h4>
                                    <p class="card-text">Asignatura: Asignatura 2</p>
                                </div>
                            </div>
                            <!-- Agrega más tarjetas de procedimientos por autorizar aquí -->
                        </div>
                        <div class="tab-pane fade" id="procedimientos" role="tabpanel" aria-labelledby="procedimientos-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Procedimiento 1</h4>
                                    <p class="card-text">Asignatura: Asignatura 1</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Procedimiento 2</h4>
                                    <p class="card-text">Asignatura: Asignatura 2</p>
                                </div>
                            </div>
                            <!-- Agrega más tarjetas de procedimientos por llenar aquí -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
