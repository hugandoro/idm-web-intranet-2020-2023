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
                        <a class="nav-link" href="https://www.idm.gov.co/4pl1c4t1v0s/DIRECTORIO/index.php">Directorio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 28pt"><b>Intranet Institucional</b></div>
                <div style="font-size: 18pt">IDM | Mapa de procesos | Direccionamiento y planeacion</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Acta de Reunión.docx" rel="nofollow">Acta de Reunión</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Encuesta Satisfacción a la Comunidad actualizado.doc" rel="nofollow">Encuesta Satisfacción a la Comunidad actualizado</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/ENCUESTA PARTICIPACION CIUDADANA INTERNA.doc" rel="nofollow">ENCUESTA PARTICIPACION CIUDADANA INTERNA</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/ENCUESTA DE PARTICIPACIÓN CIUDADANA EXTERNA.doc" rel="nofollow">ENCUESTA DE PARTICIPACIÓN CIUDADANA EXTERNA</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Ficha de Indicadores.docx" rel="nofollow">Ficha de Indicadores</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Encuesta PAAC.doc" rel="nofollow">Encuesta PAAC</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Medición de Indicadores.docx" rel="nofollow">Medición de Indicadores</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Necesidad del Servicio.docx" rel="nofollow">Necesidad del Servicio</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Planificación de cambios.docx" rel="nofollow">Planificación de cambios</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Presupuesto de Ingresos y Gastos.xlsx" rel="nofollow">Presupuesto de Ingresos y Gastos</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Registro Atención a la Comunidad.docx" rel="nofollow">Registro Atención a la Comunidad</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Solicitud Disponibilidad Presupuestal.docx" rel="nofollow">Solicitud Disponibilidad Presupuestal</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/formatos/Recepción de  Quejas y Sugerencias.doc" rel="nofollow">Recepción de  Quejas y Sugerencias</a></li>
                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/manuales/Manual Indicadores V1.doc" rel="nofollow">Manual Indicadores V1</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/manuales/RESOLUCION 305 SUBSIDIOS.pdf" rel="nofollow">RESOLUCION 305 SUBSIDIOS</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/manuales/MANUAL DE CALIDAD V 2.pdf" rel="nofollow">MANUAL DE CALIDAD V 2</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Atención  la Comunidad.doc" rel="nofollow">Atención  la Comunidad</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Elaboración del planoperativo anual de inversión.docx" rel="nofollow">Elaboración del planoperativo anual de inversión</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Elaboración Plan de Acción.docx" rel="nofollow">Elaboración Plan de Acción</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Elaboración Proyectos de Inversión.docx" rel="nofollow">Elaboración Proyectos de Inversión</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Revisión por la Direccion IDM (1).doc" rel="nofollow">Revisión por la Direccion IDM (1)</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Satisfacción de la Comunidad.doc" rel="nofollow">Satisfacción de la Comunidad</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/procedimientos/Tratamiento de Quejas, Reclamos y Sugerencias-o.k.doc" rel="nofollow">Tratamiento de Quejas, Reclamos y Sugerencias-o.k</a></li>
                </ul>

                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Caracterizacion Direccionamiento y Planeación.xls" rel="nofollow">Caracterizacion Direccionamiento y Planeación</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/indicador cumplimiento plan de accion.doc" rel="nofollow">indicador cumplimiento plan de accion</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/indicador sanciones.doc" rel="nofollow">indicador sanciones</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/indicador satisfaccion del cliente.doc" rel="nofollow">indicador satisfaccion del cliente</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Mapa de Riegos de Corrupción.xls" rel="nofollow">Mapa de Riegos de Corrupción</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Mapa de riesgos Direccionamiento y planeacion.xlsx" rel="nofollow">Mapa de riesgos Direccionamiento y planeacion</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Matriz de interacción Partes Interesadas.xls" rel="nofollow">Matriz de interacción Partes Interesadas</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Matriz Requisitos VS Procesos IDM.doc" rel="nofollow">Matriz Requisitos VS Procesos IDM</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Misión.doc" rel="nofollow">Misión</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Normograma Direcciónamiento y Planeación.doc" rel="nofollow">Normograma Direcciónamiento y Planeación</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Objetivos del sistema de Gestión Integral.docx" rel="nofollow">Objetivos del sistema de Gestión Integral</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Politica de Calidad, Seguridad y salud en el Trabajo.doc" rel="nofollow">Politica de Calidad, Seguridad y salud en el Trabajo</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Politica de Gestion del Riesgo.docx" rel="nofollow">Politica de Gestion del Riesgo</a></li>
                <li><a href="mapa_procesos/mapa/direccionamientoyplaneacion/otrosdocumentos/Visión.doc" rel="nofollow">Visión</a></li>
                </ul>

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