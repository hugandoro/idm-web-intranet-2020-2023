<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);
$currentPage = $_SERVER["PHP_SELF"];
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="application-name" content="Intranet - Instituto de Desarrollo Municipal - Dosquebradas">
    <meta name="author" content="Instituto de Desarrollo Municipal - IDM">
    <meta name="description" content="Intranet Institucional">
    <meta name="generator" content="Intranet - IDM">
    <meta name="keywords" content="IDM, Intranet, Dosquebradas">

    <title>IDM | Intranet institucional</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<!-- <body style="background-color:#F1F7E5;"> -->

<body style="background-color:#ffffff;">

    <div class="container">

   	<!-- Barra de navegacion superior -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="index.php"><img src="img/logo_idm.png" width="100" height="50" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Informacion Institucional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_mapa.php">Calidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Seguridad y salud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Bienestar social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Capacitaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Area social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Directorio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 28pt"><b>Intranet Institucional</b></div>
                <div style="font-size: 18pt">IDM | Mapa de procesos | Control y Evaluacion</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Evaluacion de Gestion por Dependencia.docx" rel="nofollow">Evaluación de Gestión por Dependencia</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Informe de Auditoria Interna.docx" rel="nofollow">Informe de Auditoria Interna</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Informe Definitivo Auditoria Control Interno.doc" rel="nofollow">Informe Definitivo Auditoria Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Lista de chequeo Auditoria Interna.docx" rel="nofollow">Lista de chequeo Auditoria Interna</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Plan de Accion de Control Interno.xls" rel="nofollow">Plan de Acción de Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Plan de Auditoria Interna C.I.docx" rel="nofollow">Plan de Auditoria Interna C.I</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Plan de Auditoria Interna.docx" rel="nofollow">Plan de Auditoria Interna</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Plan de Mejoramiento.doc" rel="nofollow">Plan de Mejoramiento</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Programa Anual de auditoria C.I.xls" rel="nofollow">Programa Anual de auditoria C.I</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Programacion Auditoria Interna.docx" rel="nofollow">Programación Auditoria Interna</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Reporte de Acto de Corrupcion o Irregularidad Administrativa V.1.docx" rel="nofollow">Reporte de Acto de Corrupción o Irregularidad Administrativa V.1</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Seguimiento 2a linea de defensa V2.docx" rel="nofollow">Seguimiento 2a linea de defensa V2</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Seguimiento al  Plan Anticorrupcion y de Atencion al Ciudadano.docx" rel="nofollow">Seguimiento al  Plan Anticorrupción y de Atención al Ciudadano</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Seguimiento Mapa de Riesgos de Corrupcion.docx" rel="nofollow">Seguimiento Mapa de Riesgos de Corrupción</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Carta de Compromiso.doc" rel="nofollow">Carta de Compromiso</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/formatos/Seguimiento a procedimientos 2a linea de defensa (1).docx" rel="nofollow">Seguimiento a procedimientos 2a linea de defensa</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Accion Correctiva y Preventiva Calidad y  SST (4).doc" rel="nofollow">Accion Correctiva y Preventiva Calidad y  SST (4)</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Administracion y Valoracion del Riesgo.doc" rel="nofollow">Administración y Valoración del Riesgo</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Auditoria Interna de Calidad y SST (1).docx" rel="nofollow">Auditoria Interna de Calidad y SST (1)</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Auditorias de Control Interno.doc" rel="nofollow">Auditorias de Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Evaluacion y Seguimiento Control Interno.doc" rel="nofollow">Evaluación y Seguimiento Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Informes de Control Interno.doc" rel="nofollow">Informes de Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/procedimientos/Evaluacion Idepend-Calidad  y MECI.doc" rel="nofollow">Evaluacion Idepend-Calidad  y MECI</a></li>
                </ul>
                    
                                        
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Caracterizacion Control y Evaluacion.xls" rel="nofollow">Caracterización Control y Evaluación</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Codigo de Etica Auditor Interno.docx" rel="nofollow">Codigo de Ética Auditor Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Estatuto Control Interno.docx" rel="nofollow">Estatuto Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Indicador  Planes de Mejoramiento Concertados.docx" rel="nofollow">Indicador  Planes de Mejoramiento Concertados.docx</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Indicador del Cumplimiento de Auditorias.docx" rel="nofollow">Indicador del Cumplimiento de Auditorias</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Indicador Fomento de la Cultura de la Prevencion.docx" rel="nofollow">Indicador Fomento de la Cultura de la Prevención</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Lista de Chequeo para AutoEvaluar Procesos.docx" rel="nofollow">Lista de Chequeo para AutoEvaluar Procesos</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Mapa de Riesgos Control y Evaluacion.xls" rel="nofollow">Mapa de Riesgos Control y Evaluación</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Matriz de Partes Interesadas  Control y Evaluacion.xls" rel="nofollow">Matriz de Partes Interesadas  Control y Evaluación</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/otros documentos/Normograma.docx" rel="nofollow">Normograma</a></li>
                </ul>            
                    
                <a href="procesos_manuales.php" rel="nofollow"><h3>Manual de Procesos y Procedimientos</h3></a>

            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="img/logo_idm.png" alt="" width="100%">
                        <small class="d-block mb-3 text-muted">Instituo de Desarrollo Municipal</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small></center>
                </div>
                <div class="col-6 col-md">
                    <h5>Institucional</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.idm.gov.co">IDM Portal web oficial</a></li>
                        <li><a class="text-muted" href="https://sicru.idm.gov.co">SICRU - Sistema de Cruces</a></li>
                        <li><a class="text-muted" href="https://saga.idm.gov.co">SAGA - Sistema asistencial gestor de archivo</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Referentes de interes general</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.undp.org/content/undp/es/home/sustainable-development-goals.html">ODS - Objetivos del Desarrollo Sostenible</a></li>
                        <li><a class="text-muted" href="https://plandesarrollo.dosquebradas.gov.co/">Plan de desarrollo municipio de Dosquebradas (Risaralda)</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>