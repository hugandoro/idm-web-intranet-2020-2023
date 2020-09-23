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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Vivienda y urbanismo</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Aceptación y Conocimiento de Obra.doc" rel="nofollow">Acta de Aceptación y Conocimiento de Obra</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de compromiso cerramiento de lote.doc" rel="nofollow">Acta de compromiso cerramiento de lote</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Seguimiento Compromisos.docx" rel="nofollow">Acta de Seguimiento Compromisos</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Seguimiento Concepto Tecnico Remitido por la DIGER.docx" rel="nofollow">Acta de Seguimiento Concepto Tecnico Remitido por la DIGER</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de vecindad.xls" rel="nofollow">Acta de vecindad</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica  Legalización.docx" rel="nofollow">Acta de Visita Técnica  Legalización</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica Cerramiento de Lote V2.doc" rel="nofollow">Acta de Visita Técnica Cerramiento de Lote V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica Mejoramiento de Vivienda.docx" rel="nofollow">Acta de Visita Técnica Mejoramiento de Vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica Reubicación.docx" rel="nofollow">Acta de Visita Técnica Reubicación</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta entrega de Obra.docx" rel="nofollow">Acta entrega de Obra</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Caracterización OPV.doc" rel="nofollow">Caracterización OPV</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Censo de Vivienda Gratuita.xlsx" rel="nofollow"></a>Censo de Vivienda Gratuita</li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Encuesta de Satisfacción Atención a la Comunidad Vivienda Gratuita.doc" rel="nofollow">Encuesta de Satisfacción Atención a la Comunidad Vivienda Gratuita</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Estudio Socioeconomico.docx" rel="nofollow">Estudio Socioeconomico</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Evaluación de Postulaciones mejoramiento  de vivienda.docx" rel="nofollow">Evaluación de Postulaciones mejoramiento  de vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Lista de Chequeo (SST).xlsx" rel="nofollow">Lista de Chequeo (SST)</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Presupuesto Mejoramiento de Vivienda.xls" rel="nofollow">Presupuesto Mejoramiento de Vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Programación Semanal de Transporte Definitivo.docx" rel="nofollow">Programación Semanal de Transporte Definitivo</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Programación Semanal de Transporte V2.docx" rel="nofollow">Programación Semanal de Transporte V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Queja de Lote sin Cerramiento.docx" rel="nofollow">Queja de Lote sin Cerramiento</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Recibo de Predio por Proceso de Reubicación.docx" rel="nofollow">Recibo de Predio por Proceso de Reubicación</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro  de Atención a la Comunidad Proyectos de Vivienda.docx" rel="nofollow">Registro  de Atención a la Comunidad Proyectos de Vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro Asistencia Reuniones Comunidad V2.docx" rel="nofollow">Registro Asistencia Reuniones Comunidad V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro de Predios Fiscales.docx" rel="nofollow">Registro de Predios Fiscales</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro de Salidas no conforme.doc" rel="nofollow">Registro de Salidas no conforme</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro diseño Arquitectonico.doc" rel="nofollow">Registro diseño Arquitectonico</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro fotografico.docx" rel="nofollow">Registro fotografico</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro y Control para Firma de Escrituración.docx" rel="nofollow">Registro y Control para Firma de Escrituración</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Relación de planos.xls" rel="nofollow">Relación de planos</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Visita seguimiento Unificada.doc" rel="nofollow">Visita seguimiento Unificada</a></li>
                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/MANUAL DEL USUARIO CERRAMIENTO DE LOTES.doc" rel="nofollow">MANUAL DEL USUARIO CERRAMIENTO DE LOTES</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/PROCEDIMIENTO SICRU COMPLETO.docx" rel="nofollow">PROCEDIMIENTO SICRU COMPLETO</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RES 017-2018  MODIFICA RESOLUCIÓN 317 DE 2014.pdf" rel="nofollow">RES 017-2018  MODIFICA RESOLUCIÓN 317 DE 2014</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RESOLUCIÓN SICRU N° 087.pdf" rel="nofollow">RESOLUCIÓN SICRU N° 087</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RESOLUCION 318 SUBSIDIOS.pdf" rel="nofollow">RESOLUCION 318 SUBSIDIOS</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RESOLUCION CERRAMIENTO DE LOTES.pdf" rel="nofollow">RESOLUCION CERRAMIENTO DE LOTES</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Cerramiento de Lotes V2.doc" rel="nofollow">Cerramiento de Lotes V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Control de salidas no Conformes.doc" rel="nofollow">Control de salidas no Conformes</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Diseño y Desarrollo v 3.0.pdf" rel="nofollow">Diseño y Desarrollo v 3.0</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Gestión de Obras de Interés público.doc" rel="nofollow">Gestión de Obras de Interés público</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Organización e Impulso a la Vivienda V2.doc" rel="nofollow">Organización e Impulso a la Vivienda V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/Procedimiento Sancionatorio Restitucion de Subsidios.docx">Procedimiento sancionatorio restitución de subsidios</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Apoyo Social V2.doc" rel="nofollow">Apoyo Social V2</a></li>
                </ul>

                <h3>Otros documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Caracterización vivienda urbanismo y obras de interes publico por valorizacion.xls" rel="nofollow">Caracterización vivienda urbanismo y obras de interes publico por valorizacion</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador apoyo social modificado.doc" rel="nofollow">Indicador apoyo social modificado</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador predios legalizados modificados.doc" rel="nofollow">Indicador predios legalizados modificados</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador satisfaccion apoyo social modificado.doc" rel="nofollow">Indicador satisfaccion apoyo social modificado</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador Subsidio de mejoramientos modificado.doc" rel="nofollow">Indicador Subsidio de mejoramientos modificado</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Mapa de Riesgos Vivienda, urbanismo y Obras.xls" rel="nofollow">Mapa de Riesgos Vivienda, urbanismo y Obras</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Matriz de Partes Interesadas Vivienda, urbanismo y obras de interés público por valorización.xls" rel="nofollow">Matriz de Partes Interesadas Vivienda, urbanismo y obras de interés público por valorización</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Normograma Vivienda, urbanismo y obras de interés público por valorización (2).doc" rel="nofollow">Normograma Vivienda, urbanismo y obras de interés público por valorización (2)</a></li>
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