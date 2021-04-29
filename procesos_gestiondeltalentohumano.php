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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Gestion del talento humano</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Acta de Compromiso.docx" rel="nofollow">Acta de Compromiso</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Aceptacion de cargo V1.doc" rel="nofollow">Aceptacion del cargo V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Acta de Entrega de Cargo V1.docx" rel="nofollow">Acta de Entrega de Cargo (Nuevo)</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Certificado de Induccion V1.pdf" rel="nofollow">Certificado de Induccion V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Asistencia Reuniones y Actividades V2.doc" rel="nofollow">Control de asistencia a reuniones y actividades V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Control de ausentismo Laboral.xls" rel="nofollow">Control de ausentismo Laboral</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Control prestamo Historias Laborales.xls" rel="nofollow">Control prestamo Historias Laborales</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Cronograma Actividades Bienestar social e incentivos V1.xls" rel="nofollow">Cronograma Actividades Bienestar social e incentivos V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Cuestionario retiro.docx" rel="nofollow">Cuestionario retiro</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Desprendible Nomina V2.xls" rel="nofollow">Desprendible de nomina V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Disfrute de Vacaciones.xls" rel="nofollow">Disfrute de Vacaciones</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Encuesta de clima laboral.docx" rel="nofollow">Encuesta de clima laboral</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Estado de Vacaciones.xls" rel="nofollow">Estado de Vacaciones</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Evaluacion de la eficacia de la capacitacion.doc" rel="nofollow">Evaluacion de la eficacia de la capacitacion</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Formato de bienes y rentas conflicto intereses V3.xls" rel="nofollow">Formato de bienes y rentas conflicto intereses V3</a></li>

                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Hoja de control de historias laborales V1.doc" rel="nofollow">Hoja de control de historias laborales V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Inscripcion actividades de Bienestar social.xlsx" rel="nofollow">Inscripcion actividades de Bienestar social</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Listado de Funcionarios de Planta.xls" rel="nofollow">Listado de Funcionarios de Planta</a></li>
                                
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Notificacion de cargo V1.doc" rel="nofollow">Notificacion del cargo V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Planilla de vacaciones compensadas.xls" rel="nofollow">Planilla de vacaciones compensadas</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Planilla funcionarios aptos para votaciones internas.xls" rel="nofollow">Planilla funcionarios aptos para votaciones internas</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Programa de Capacitacion general V2.xls" rel="nofollow">Programa de capacitacion general V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Programacion Vacaciones.xls" rel="nofollow">Programacion Vacaciones</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Provisión ARL.xlsx" rel="nofollow">Provisión ARL</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Validación Competencias Comportamentales.xls" rel="nofollow">Validación Competencias Comportamentales</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/formatos/Validacion de conocimientos basicos y escenciales.docx" rel="nofollow">Validacion de conocimientos basicos y escenciales</a></li>

                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/manuales/Manual de Inducción y Reinducción.doc" rel="nofollow">Manual de Inducción y Reinducción</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/manuales/Res 0015 de Feb 2021 Manual de funciones modificado.PDF" rel="nofollow">Res 0015 de Feb 2021 Manual de funciones modificado</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/manuales/RESOLUCION 066 2015, Manual de Funciones y Competencias laborales (3).pdf" rel="nofollow">RESOLUCION 066 2015, Manual de Funciones y Competencias laborales</a></li>
                </ul>
                    
                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/procedimientos/Administracion de Personal.doc" rel="nofollow">Administracion de Personal</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/procedimientos/Bienestar Social e Incentivos.doc" rel="nofollow">Bienestar Social e Incentivos</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/procedimientos/Desarrollo de Competencias Laborales.doc" rel="nofollow">Desarrollo de Competencias Laborales</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/procedimientos/Planificación y Evaluación de Desempeño ( 1).doc" rel="nofollow">Planificación y Evaluación de Desempeño</a></li>
                </ul> 
                    
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Caracterización Gestion Talento Humano.xls" rel="nofollow">Caracterización Gestion Talento Humano</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Indicador capacitación.docx" rel="nofollow">Indicador capacitación</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Indicador Clima Laboral.docx" rel="nofollow">Indicador Clima Laboral</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Indicador Evaluación de desempeño.docx" rel="nofollow">Indicador Evaluación de desempeño</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Mapa de Riesgos Gestion Talento Humano.xls" rel="nofollow">Mapa de Riesgos Gestion Talento Humano</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Matriz de  Partes Interesadas Gestión Estrategico del Recurso humano.xls" rel="nofollow">Matriz de  Partes Interesadas Gestión Estrategico del Recurso humano</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Normograma 2020.doc" rel="nofollow">Normograma 2020</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Protocolo de prevencion y actuacion acoso laboral Mintrabajo.pdf" rel="nofollow">Protocolo de prevencion y actuacion acoso laboral Mintrabajo</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/otrosdocumentos/Resolución 083 Código de Integridad  del IDM.pdf" rel="nofollow">Resolución 083 Código de Integridad  del IDM</a></li>
                </ul>            
                    
                                

                <a href="procesos_saludeneltrabajo.php" rel="nofollow"><h3>Seguridad y Salud en el Trabajo</h3></a>

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