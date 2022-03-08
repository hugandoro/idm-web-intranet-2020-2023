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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Gestión documental y de recursos físicos</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Actualizacion de documentos V2.doc" rel="nofollow">Actualizacion de documentos V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Caratula Legajos de Archivo V2.doc" rel="nofollow">Caratula Legajos de Archivo V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Depreciaciones.xls" rel="nofollow">Depreciaciones</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Entrega de Papelería V2.xlsx" rel="nofollow">Entrega de Papelería V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Entrega de insumos para identificación.doc" rel="nofollow">Entrega de insumos para identificación</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Ficha de Inventario.xlsx" rel="nofollow">Ficha de Inventario</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Formato Word V7.doc" rel="nofollow">FORMATO DE WORD - Version 7</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Formato para Baja de inventarios V1.xlsx" rel="nofollow">Formato para Baja de inventarios V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Hoja de Control V2.docx" rel="nofollow">Hoja de Control V2</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Inventario Manual V2.docx" rel="nofollow">Inventario Manual V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Inventario Unico Documental FIUD V2.doc" rel="nofollow">Inventario Unico Documental FIUD V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Prestamo Logistica.doc" rel="nofollow">Prestamo Logistica</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Solicitud Documentos a Archivo V2.docx" rel="nofollow">Solicitud Documentos a Archivo V2</a></li>
                
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/formatos/Formatos Limpieza y desfinfeccion archivo V1.xls" rel="nofollow">Formatos Limpieza y desfinfeccion archivo V1</a></li>
                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RES 283  MANUAL DE ARCHIVO.pdf" rel="nofollow">RES 283  MANUAL DE ARCHIVO</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RESOLUCIÓN 051-2020 PGD.pdf" rel="nofollow">RESOLUCIÓN 051-2020 PGD</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/RESOLUCIÓN 052-2020 PGD.pdf" rel="nofollow">RESOLUCIÓN 052-2020 PGD</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/PROGRAMA DE GESTION DOCUMENTAL DEL IDM.pdf" rel="nofollow">PROGRAMA DE GESTION DOCUMENTAL DEL IDM</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/manuales/POLITICA DE GESTION DOCUMENTAL.pdf" rel="nofollow">POLITICA DE GESTION DOCUMENTAL</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Atencion en Ventanilla Unica V2.doc" rel="nofollow">Atencion en Ventanilla Unica V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Control de la Informacion Documentada V2.doc" rel="nofollow">Control de la Informacion Documentada V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/procedimientos/Registro de Inventarios.doc" rel="nofollow">Registro de Inventarios</a></li>
                </ul>
                                        
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Caracterizacion Gestion Documental y de Rec Fisicos V2.xls" rel="nofollow">Caracterizacion Gestion Documental y de Rec Fisicos V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Cuadro de clasificacion documental V1.xls" rel="nofollow">Cuadro de clasificacion documental V1</a></li>
                
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Indicador Hoja de Vida  Inventarios.docx" rel="nofollow">Indicador Hoja de Vida  Inventarios</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/MAPA RIESGOS GESTION DOCUMENTAL Y REC FISICOS V5.xlsx" rel="nofollow">Mapa de riesgos gestion documental y recursos fisicos V5</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Matriz Comunicación Interna.doc" rel="nofollow">Matriz Comunicación Interna</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Matriz de partes interesadas Gest Doc y RRFF V2.xls" rel="nofollow">Matriz de partes interesadas Gest Doc y RRFF V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Normograma Gestion Documental y de RRFF 2021.doc" rel="nofollow">Normograma Gestion Documental y de RRFF 2021</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Tablas de Valoración documental.doc" rel="nofollow">Tablas de Valoración documental</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/IDM - Manual de ventanilla unica.pdf" rel="nofollow">IDM - Manual de ventanilla unica</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/IDM - Resolucion 132 - Ventanilla unica.pdf" rel="nofollow">IDM - Resolucion 132 - Ventanilla unica</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/TRD - Resolucion 131.pdf" rel="nofollow">TRD - Tablas de retencion documental - Resolucion 131</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Tablas de Retencion Documental - 2020 - Actualizadas (25-11-2020).pdf" rel="nofollow"><b>TRD - Tablas de retencion documental - 2020 - Actualizadas (25-11-2020)</b></a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Resolucion 077 manual tablas de retencion.pdf" rel="nofollow">Resolucion 077 manual tablas de retencion</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Resolucion 076 Politica Cero Papel.pdf" rel="nofollow">Resolucion 076 Politica Cero Papel</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Manual tablas retencion documental.docx" rel="nofollow">Manual tablas retencion documental</a></li>
                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Politica de cero papel 2021.docx" rel="nofollow">Politica de cero papel 2021</a></li>

                <li><a href="mapa_procesos/mapa/gestionderecursosfisicosytecnologicos/otrosdocumentos/Sistema Integrado de Conservacion 2021.pdf" rel="nofollow">Sistema Integrado de Conservacion 2021</a></li>

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