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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Gestion de recursos fisicos y tecnologicos</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Actualización de documentos.doc" rel="nofollow">Actualización de documentos</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Carátula Legajos  de Archivo.doc" rel="nofollow">Carátula Legajos  de Archivo</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Cronograma mantenimiento computadores  y equipos V1.xls" rel="nofollow">Cronograma mantenimiento computadores y equipos V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Depreciaciones.xls" rel="nofollow">Depreciaciones</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Entrega de Papelería V2.xlsx" rel="nofollow">Entrega de Papelería V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Entrega de insumos para identificación.doc" rel="nofollow">Entrega de insumos para identificación</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Ficha de Inventario.xlsx" rel="nofollow">Ficha de Inventario</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Ficha de Publicación WEB.docx" rel="nofollow">Ficha de Publicación WEB</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Formato Word V7.doc" rel="nofollow">FORMATO DE WORD - Version 7</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Formato para Baja de inventarios V1.xlsx" rel="nofollow">Formato para Baja de inventarios V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Hoja de Control.docx" rel="nofollow">Hoja de Control</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Hoja de vida PCs V1.xls" rel="nofollow">Hoja de vida PCs V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Inventario Manual.docx" rel="nofollow">Inventario Manual</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Inventario Unico Documental FIUD.doc" rel="nofollow">Inventario Unico Documental FIUD</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Prestamo Logistica.doc" rel="nofollow">Prestamo Logistica</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Solicitud Documentos- Archivo.docx" rel="nofollow">Solicitud Documentos- Archivo</a></li>
                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RES 283  MANUAL DE ARCHIVO.pdf" rel="nofollow">RES 283  MANUAL DE ARCHIVO</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RESOLUCION 263-14  MANUAL DE SEGURIDAD.docx" rel="nofollow">RESOLUCION 263-14  MANUAL DE SEGURIDAD</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RESOLUCIÓN 051-2020 PGD.pdf" rel="nofollow">RESOLUCIÓN 051-2020 PGD</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RESOLUCIÓN 052-2020 PGD.pdf" rel="nofollow">RESOLUCIÓN 052-2020 PGD</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/PROGRAMA DE GESTION DOCUMENTAL DEL IDM.pdf" rel="nofollow">PROGRAMA DE GESTION DOCUMENTAL DEL IDM</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/POLITICA DE GESTION DOCUMENTAL.pdf" rel="nofollow">POLITICA DE GESTION DOCUMENTAL</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Administracion de recursos tecnologicos V2.pdf" rel="nofollow">Administracion de Recursos Tecnologicos V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Atencion en Ventanilla Unica.doc" rel="nofollow">Atencion en Ventanilla Unica</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Control de la Información Documentada.doc" rel="nofollow">Control de la Información Documentada</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Registro de Inventarios.doc" rel="nofollow">Registro de Inventarios</a></li>
                </ul>
                                        
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Caracterización Rec Fisicos y tecnologicos.xls" rel="nofollow">Caracterización Rec Fisicos y tecnologicos</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Indicador Hoja de Vida  Inventarios.docx" rel="nofollow">Indicador Hoja de Vida  Inventarios</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Indicador Mantenimientos Preventivos por Equipo.docx" rel="nofollow">Indicador Mantenimientos Preventivos por Equipo</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Mapa de Riesgos REc Fisicos y Tec.xls" rel="nofollow">Mapa de Riesgos REc Fisicos y Tec</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Matriz Comunicación Interna.doc" rel="nofollow">Matriz Comunicación Interna</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Matriz de partes interesadas REc Fis y Tec.xls" rel="nofollow">Matriz de partes interesadas REc Fis y Tec</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Normograma 2020.doc" rel="nofollow">Normograma 2020</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Tablas de Valoración documental.doc" rel="nofollow">Tablas de Valoración documental</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/IDM - Manual de ventanilla unica.pdf" rel="nofollow">IDM - Manual de ventanilla unica</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/IDM - Resolucion 132 - Ventanilla unica.pdf" rel="nofollow">IDM - Resolucion 132 - Ventanilla unica</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/TRD - Resolucion 131.pdf" rel="nofollow">TRD - Tablas de retencion documental - Resolucion 131</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Tablas de Retencion Documental - 2020 - Actualizadas (25-11-2020).pdf" rel="nofollow"><b>TRD - Tablas de retencion documental - 2020 - Actualizadas (25-11-2020)</b></a></li>

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