<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesos</title>
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
                        <a class="nav-link active" href="procesos.php">Procesos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="autorizar.php">Autorizar</a>
                    </li>                 
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu">
                    <h3>Opciones de Procesos</h3>
                    <ul class="nav nav-tabs" id="procesosTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="endodoncia-tab" data-toggle="tab" href="#endodoncia" role="tab" aria-controls="endodoncia" aria-selected="true">Seguimiento a procesos clínicos endodoncia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="periodoncia-tab" data-toggle="tab" href="#periodoncia" role="tab" aria-controls="periodoncia" aria-selected="false">Seguimiento a procedimientos clínicos periodoncia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="operatoria-tab" data-toggle="tab" href="#operatoria" role="tab" aria-controls="operatoria" aria-selected="false">Seguimiento a procedimiento clínicos rehabilitación operatoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="oral-tab" data-toggle="tab" href="#oral" role="tab" aria-controls="oral" aria-selected="false">Seguimiento a procedimientos clínicos rehabilitación oral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cirugia-tab" data-toggle="tab" href="#cirugia" role="tab" aria-controls="cirugia" aria-selected="false">Seguimiento a procedimientos clínicos cirugía</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="odontopediatria-tab" data-toggle="tab" href="#odontopediatria" role="tab" aria-controls="odontopediatria" aria-selected="false">Seguimiento a procesos clínicos odontopediatría</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ortodoncia-tab" data-toggle="tab" href="#ortodoncia" role="tab" aria-controls="ortodoncia" aria-selected="false">Seguimiento procedimientos clínicos ortodoncia</a>
                        </li>
                    </ul>
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
