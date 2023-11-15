<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento PCO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #bbe3db;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Seguimiento Procedimiento Clinico Ortodoncia</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <h3>Parte izquierda de arriba</h3>
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
                    <div class="form-group">
                        <label for="organoDental">Órgano Dental</label>
                        <input type="text" class="form-control" id="organoDental" name="organoDental">
                    </div>
                    <div class="form-group">
                        <label for="diagnostico">Diagnóstico</label>
                        <input type="text" class="form-control" id="diagnostico" name="diagnostico">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hcPrimeraVez" name="hcPrimeraVez">
                        <label class="form-check-label" for="hcPrimeraVez">HC Primera Vez</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hcRevaluacion" name="hcRevaluacion">
                        <label class="form-check-label" for="hcRevaluacion">HC Revaluación</label>
                    </div>
                    <div class="form-group">
                        <label for="hcRemitidaPor">HC Remitida Por:</label>
                        <input type="text" class="form-control" id="hcRemitidaPor" name="hcRemitidaPor">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Parte derecha de arriba</h3>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="procedimientos">Procedimientos</label>
                        <input type="text" class="form-control" id="procedimientos" name="procedimientos">
                    </div>
                    <div class="form-group">
                        <label for="serCompromiso">Ser/Compromiso</label>
                        <input type="text" class="form-control" id="serCompromiso" name="serCompromiso">
                    </div>
                    <div class="form-group">
                        <label for="saberSustentacion">Saber/Sustentación</label>
                        <input type="text" class="form-control" id="saberSustentacion" name="saberSustentacion">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rxInicial" name="rxInicial">
                        <label class="form-check-label" for="rxInicial">RX Inicial Órgano Dental (Si/No)</label>
                    </div>
                    <div class="form-group">
                        <label for="listaChequeo">Lista de Chequeo Instrumental</label>
                        <input type="text" class="form-control" id="listaChequeo" name="listaChequeo">
                    </div>
                    <div class="form-group">
                        <label for="apertura">Apertura</label>
                        <input type="text" class="form-control" id="apertura" name="apertura">
                    </div>
                    <div class="form-group">
                        <label for="rxConducto">RX Conducto</label>
                        <input type="text" class="form-control" id="rxConducto" name="rxConducto">
                    </div>
                    <div class="form-group">
                        <label for="conometria