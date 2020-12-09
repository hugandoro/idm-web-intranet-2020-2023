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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Salud en el trabajo</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Asignacion de Recursos SGSST V1.xls" rel="nofollow">Asignacion de Recursos SGSST V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Carta de asignacion de responsable del SGSST V1.doc" rel="nofollow">Carta de asignacion de responsable del SGSST V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Control uso Boutiquin.xls" rel="nofollow">Control uso Boutiquin</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Entrega Individual de EPP.xls" rel="nofollow">Entrega Individual de EPP</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Evaluación de Simulacros SST.doc" rel="nofollow">Evaluación de Simulacros SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Gestion del cambio en SST.doc" rel="nofollow">Gestion del cambio en SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Inspección de Seguridad V2.xls" rel="nofollow">Inspeccion de Seguridad V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Inspección Mensual de botiquines.doc" rel="nofollow">Inspección Mensual de botiquines</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Inspección Mensual de Extintores.doc" rel="nofollow">Inspección Mensual de Extintores</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Investigación de incidentes y accidentes de trabajo.xls" rel="nofollow">Investigación de incidentes y accidentes de trabajo</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Programa de capacitacion SST.doc" rel="nofollow">Programa de capacitacion SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Registro de Limpieza y Desinfección.docx" rel="nofollow">Registro de Limpieza y Desinfección</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Formato SST Registro de temperatura Y Entrega Tapabocas.docx" rel="nofollow">Formato SST Registro de temperatura Y Entrega Tapabocas</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Reporte de condiciones inseguras y de salud.doc" rel="nofollow">Reporte de condiciones inseguras y de salud</a></li>
                </ul>

                <h3>Instructivos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo Identificacion de Peligros y Valoracion de riesgos SST.doc" rel="nofollow">Instructivo Identificacion de Peligros y Valoracion de riesgos SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para Control de Requisitos legales SST.doc" rel="nofollow">Instructivo para Control de Requisitos legales SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para Investigación de Incidentes, Accidentes de trabajo  y Enfermedad laboral.doc" rel="nofollow">Instructivo para Investigación de Incidentes, Accidentes de trabajo  y Enfermedad laboral</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para la Gestión del Cambio SST.doc" rel="nofollow">Instructivo para la Gestión del Cambio SST</a></li>
                </ul>
                                        
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Evaluación Inicial  SG-SST  2015.xls" rel="nofollow">Evaluación Inicial  SG-SST  2015</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Hoja de seguridad Hipoclorito de Sodio.docx" rel="nofollow">Hoja de seguridad Hipoclorito de Sodio</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Indicadores estructura SST.doc" rel="nofollow">Indicadores estructura SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Indicadores proceso y resultado SST.xls" rel="nofollow">Indicadores proceso y resultado SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Matriz de peligros y riesgos V2 Dic 2019.xls" rel="nofollow">Matriz de peligros y riesgos</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Matriz legal SST V2 Dic 2019.xls" rel="nofollow">Matriz Legal SST - Dic 2019</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Programa de Pausas Activas V1.pdf" rel="nofollow">Programa de Pausas Activas V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Reglamento de Higiene y seguridad.doc" rel="nofollow">Reglamento de Higiene y seguridad</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Reglamento SST Contratistas.doc" rel="nofollow">Reglamento SST Contratistas</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de cuentas SST 2017.pptx" rel="nofollow">Rendicion de cuentas SST 2017</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de cuentas SST 2018.pptx" rel="nofollow">Rendicion de cuentas SST 2018</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de Cuentas SST 2019.ppt" rel="nofollow">Rendicion de cuentas SST 2019</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Roles y Responsabilidades SST.doc" rel="nofollow">Roles y Responsabilidades SST</a></li>
                </ul>            
                    
                <h3>Plan de Emergencias</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/Plan de Emergencias/Ruta de Evacuación IDM.pdf" rel="nofollow">Ruta de Evacuación IDM</a></li>
                
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/Plan de Emergencias/Plan de Emergencias V2.doc" rel="nofollow">Plan de emergencia V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/Plan de Emergencias/Plan de Emergencias V2 - Anexo matriz de vulnerabilidad.xls" rel="nofollow">Plan de emergencia V2 - Anexo</a></li>
                </ul>  

                <h3>PVE osteomuscular 2016-2017</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Análisis ausentismo 2016.xls" rel="nofollow">Análisis ausentismo 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Análisis demográfico 2016.xls" rel="nofollow">Análisis demográfico 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Cronograma de Actividades 2017.xls" rel="nofollow">Cronograma de Actividades 2017</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Diagnóstico de condiciones de salud y de trabajo 2016.pdf" rel="nofollow">Diagnóstico de condiciones de salud y de trabajo 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Diagnostico de Salud 2016.xlsx" rel="nofollow">Diagnostico de Salud 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Encuesta Riesgo Osteomuscular 2016.pdf" rel="nofollow">Encuesta Riesgo Osteomuscular 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Línea basal Riesgo Osteomuscular 2016.xlsx" rel="nofollow">Línea basal Riesgo Osteomuscular 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Matriz Legal Riesgo Osteomuscular 2016.xlsx" rel="nofollow">Matriz Legal Riesgo Osteomuscular 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/PVE Osteomuscular 2016-2017.pdf" rel="nofollow">PVE Osteomuscular 2016-2017</a></li>
                </ul>

                <h3>PVE Psicosocial 2016-2017</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE Psicosocial 2016-2017/Analisis DxRP IDM 2016.pdf" rel="nofollow">Analisis DxRP IDM 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE Psicosocial 2016-2017/Consulta Sociodemografica DxRP IDM 2016.xlsm" rel="nofollow">Consulta Sociodemografica DxRP IDM 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE Psicosocial 2016-2017/Matriz de Resultados DxRP IDM 2016.xlsx" rel="nofollow">Matriz de Resultados DxRP IDM 2016</a></li>
                </ul>

                <h3>PVE osteomuscular 2018-2019</h3>
                <ul class="tmo_list">
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Analisis ausentismo 2018.xls" rel="nofollow">Analisis ausentismo 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Cronograma de Actividades 2019.xls" rel="nofollow">Cronograma de Actividades 2019</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Diagnostico de condiciones de salud y de trabajo 2018.pdf" rel="nofollow">Diagnostico de condiciones de salud y de trabajo 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Linea Basal Riesgo Osteomuscular 2018.xls" rel="nofollow">Linea Basal Riesgo Osteomuscular 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Matriz Legal Riesgo Osteomuscular 2018.xls" rel="nofollow">Matriz Legal Riesgo Osteomuscular 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Perfil Sociodemografico 2018.xls" rel="nofollow">Perfil Sociodemografico 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/PVE Osteomuscular 2018-2019.doc" rel="nofollow">PVE Osteomuscular 2018-2019</a></li>
                </ul>

                <h3>Formulario Para Ausentismo Laboral</h3>
                <div id="qrcode">
                    <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fforms.gle%2FkP1wDFqAmS6B3HDQ7&s=6&e=m" alt="Generador de Códigos QR Codes"/>
                    <br/>
                </div>

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