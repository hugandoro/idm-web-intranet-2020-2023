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
                        <a class="nav-link" href="">De interes general |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_mapa.php">Sistema de Calidad |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="memoria_institucional.php">Memoria institucional y del conocimiento |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://soporte.idm.gov.co">Soporte TIC |</a>
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
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de compromiso cerramiento de lote.doc" rel="nofollow">Acta de compromiso cerramiento de lote</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Cerramiento de Lote V1.doc" rel="nofollow">Acta de cerramiento de lote V1</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Seguimiento Compromisos.docx" rel="nofollow">Acta de Seguimiento Compromisos</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica  Legalización.docx" rel="nofollow">Acta de Visita Técnica  Legalización</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica Cerramiento de Lote V2.doc" rel="nofollow">Acta de Visita Técnica Cerramiento de Lote V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Tecnica Mejoramiento de Vivienda V2.doc" rel="nofollow">Acta de Visita Técnica Mejoramiento de Vivienda V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Acta de Visita Técnica Reubicación.docx" rel="nofollow">Acta de Visita Técnica Reubicación</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Caracterización OPV.doc" rel="nofollow">Caracterización OPV</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Censo de Vivienda Gratuita V1.xls" rel="nofollow">Censo de Vivienda Gratuita V1</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Control de Cerramiento de Lotes V1.xls" rel="nofollow">Control de Cerramiento de Lotes V1</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Evaluación de Postulaciones mejoramiento  de vivienda.docx" rel="nofollow">Evaluación de Postulaciones mejoramiento  de vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Presupuesto Mejoramiento de Vivienda.xls" rel="nofollow">Presupuesto Mejoramiento de Vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Programación Semanal de Transporte V2.docx" rel="nofollow">Programación Semanal de Transporte V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Recibo de Predio por Proceso de Reubicación.docx" rel="nofollow">Recibo de Predio por Proceso de Reubicación</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro  de Atención a la Comunidad Proyectos de Vivienda.docx" rel="nofollow">Registro  de Atención a la Comunidad Proyectos de Vivienda</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro Asistencia Reuniones Comunidad V2.docx" rel="nofollow">Registro Asistencia Reuniones Comunidad V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro de Predios Fiscales.docx" rel="nofollow">Registro de Predios Fiscales</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro de Salidas no conforme.doc" rel="nofollow">Registro de Salidas no conforme</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro diseño Arquitectonico.doc" rel="nofollow">Registro diseño Arquitectonico</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro fotografico V2.doc" rel="nofollow">Registro fotografico V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Registro y Control para Firma de Escrituración.docx" rel="nofollow">Registro y Control para Firma de Escrituración</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/formatos/Visita Tecnica Mejoramiento Integral de Barrios V1.docx" rel="nofollow">Visita Tecnica Mejoramiento Integral de Barrios V1</a></li>

                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RESOLUCION 305 SUBSIDIOS.pdf" rel="nofollow">RESOLUCION 305 SUBSIDIOS</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RES 017-2018  MODIFICA RESOLUCIÓN 317 DE 2014.pdf" rel="nofollow">RES 017-2018  MODIFICA RESOLUCIÓN 317 DE 2014</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/manuales/RESOLUCION 318 SUBSIDIOS.pdf" rel="nofollow">RESOLUCION 318 SUBSIDIOS</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Procedimiento Cerramiento de Lotes V3.doc" rel="nofollow">Cerramiento de Lotes V3</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Control de salidas no Conformes.doc" rel="nofollow">Control de salidas no Conformes</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Diseno y Desarrollo V4.docx" rel="nofollow">Diseño y Desarrollo V4</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Organizacion e impulso a la vivienda V2.doc" rel="nofollow">Organización e Impulso a la Vivienda V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Procedimiento Sancionatorio Restitucion de Subsidios V2.docx">Procedimiento sancionatorio restitución de subsidios V2</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/procedimientos/Apoyo Social V2.doc" rel="nofollow">Apoyo Social V2</a></li>
                </ul>

                <h3>Otros documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Caracterizacion Vivienda urbanismo y obras de interes publico V2.xls" rel="nofollow">Caracterización vivienda urbanismo y obras de interes publico por valorizacion V2</a></li>
                
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador predios legalizados 2021 - V1.doc" rel="nofollow">Indicador predios legalizados V1</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador subsidios mejoramiento de vivienda 2021- V1.doc" rel="nofollow">Indicador subsidio de mejoramiento V1</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Indicador subsidio de vivienda nueva o usada 2021-V1.doc" rel="nofollow">Indicador subsidio de vivienda nueva o usada V1</a></li>

                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/MAPA RIESGOS VIVIENDA, URBANISMO, OBRAS INTERES PUBLICO V5.xlsx" rel="nofollow">Mapa de Riesgos Vivienda, urbanismo y Obras V5</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Matriz de Partes Interesadas Vivienda, urbanismo y obras de interés público por valorización.xls" rel="nofollow">Matriz de Partes Interesadas Vivienda, urbanismo y obras de interés público por valorización</a></li>
                <li><a href="mapa_procesos/mapa/viviendayurbanismo/otros documentos/Normograma 2021.doc" rel="nofollow">Normograma 2021</a></li>
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
                        <li><a class="text-muted" href="https://bien.idm.gov.co">BIEN - Base institucional estadistica normativa</a></li>
                        <li><a class="text-muted" href="https://saga.idm.gov.co">SAGA - Sistema asistencial gestor de archivo</a></li>
                        <li><a class="text-muted" href="https://soporte.idm.gov.co">MESA TIC - Mesa de ayuda y soporte TIC</a></li>
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