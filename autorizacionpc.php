<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorización Procedimientos Clínicos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <h2>Autorización Procedimientos Clínicos</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="estudiante">Estudiante</label>
                        <input type="text" class="form-control" id="estudiante" name="estudiante">
                    </div>
                    <div class="form-group">
                        <label for="codigoEstudiante">Código Estudiante</label>
                        <input type="number" class="form-control" id="codigoEstudiante" name="codigoEstudiante">
                    </div>
                    <div class="form-group">
                        <label for="semestre">Semestre</label>
                        <input type="number" class="form-control" id="semestre" name="semestre">
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="historiaClinica" name="historiaClinica">
                        <label class="form-check-label" for="historiaClinica">Historia Clínica (Sí/No)</label>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <h3>Título: Autorización Docentes</h3>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="semiologia" name="semiologia">
                        <label class="form-check-label" for="semiologia">Semiología</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="periodoncia" name="periodoncia">
                        <label class="form-check-label" for="periodoncia">Periodoncia</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="operacionRehabilitacion" name="operacionRehabilitacion">
                        <label class="form-check-label" for="operacionRehabilitacion">Operación/Rehabilitación Oral</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="endodoncia" name="endodoncia">
                        <label class="form-check-label" for="endodoncia">Endodoncia</label>
                    </div>
                    <div class="form-group">
                        <label for="firmaEstudiante">Firma Estudiante (Ingrese 'Si'):</label>
                        <input type="text" class="form-control" id="firmaEstudiante" name="firmaEstudiante">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>