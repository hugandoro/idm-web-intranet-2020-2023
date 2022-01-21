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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Gestion juridica</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Acta de Evaluación Técnica, Jurídica y Financiera.doc" rel="nofollow">Acta de Evaluación Técnica, Jurídica y Financiera</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Acta de Reunión requerimiento.docx" rel="nofollow">Acta de Reunión requerimiento</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Acta SeguimientoContrato.doc" rel="nofollow">Acta SeguimientoContrato</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/ACTAS IDM 2019 Version 3.1.xlsx" rel="nofollow">ACTAS IDM 2019 Version 3.1</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Asistencia a Visita de Obra.doc" rel="nofollow">Asistencia a Visita de Obra</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Asistencia Audiencia Pública.doc" rel="nofollow">Asistencia Audiencia Pública</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Caratula Procesos Jurídicos.doc" rel="nofollow">Caratula Procesos Jurídicos</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Certificación de Visita de Obra.doc" rel="nofollow">Certificación de Visita de Obra</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Evaluación Economica.docx" rel="nofollow">Evaluación Economica</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Formato Estudios previos V1.doc" rel="nofollow">Formato Estudios previos V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Lista de Chequeo Minima cuantia contratacion.doc" rel="nofollow">lista de Chequeo Minima cuantia contratacion</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Lista de Chequeo otras Modaliddaes Contratacion.doc" rel="nofollow">Lista de Chequeo otras Modaliddaes Contratacion</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Lista de Chequeo Contratación Directa vr 2.doc" rel="nofollow">Lista de Chequeo Contratación Directa vr 2</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Lista de chequeo para iniciación del contrato.doc" rel="nofollow">Lista de chequeo para iniciación del contrato</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/formatos/Registro Entrega de Propuesta.doc" rel="nofollow">Registro Entrega de Propuesta</a></li>
                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionjuridica/manuales/MANUAL DE CONTRATACION IDM 2014.pdf" rel="nofollow">MANUAL DE CONTRATACION IDM 2014</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/manuales/RESOLUCION 213 MANUAL INTERVENTORIA Y SUPERVISION.pdf" rel="nofollow">RESOLUCION 213 MANUAL INTERVENTORIA Y SUPERVISION</a></li>
                </ul>
                
                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Acción de Tutela-.doc" rel="nofollow">Acción de Tutela</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Derechos de Petición.doc" rel="nofollow">Derechos de Petición</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Para Proceso Ordinario ( Control Disciplinario).doc" rel="nofollow">Para Proceso Ordinario ( Control Disciplinario)</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Procedimiento Contractual para las distintas Modalidades de selección vr 2.doc" rel="nofollow">Procedimiento Contractual para las distintas Modalidades de selección vr 2</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Procedimiento Recursos de Reposición.doc" rel="nofollow">Procedimiento Recursos de Reposición</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Proceso para Recursos ( Cotrol Disiciplinario).doc" rel="nofollow">Proceso para Recursos ( Cotrol Disiciplinario)</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/procedimientos/Proceso Verbal ( Control Disciplinario).doc" rel="nofollow">Proceso Verbal ( Control Disciplinario)</a></li>
                </ul>
                    
                    
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/Caracterización.xls" rel="nofollow">Caracterización</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/Hoja de Vida Indicadores contratacion.doc" rel="nofollow">Hoja de Vida Indicadores contratacion</a></li>
                
                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/MAPA RIESGOS GESTION JURIDICA PARTE 1 V5.xlsx" rel="nofollow">Mapa de Riesgos Gestión Juridica 1 - V5</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/MAPA RIESGOS GESTION JURIDICA PARTE 2 V5.xlsx" rel="nofollow">Mapa de Riesgos Gestión Juridica 2 - V5</a></li>

                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/manual_contratacion_idm_2021.pdf" rel="nofollow">Manual de contratación - 2021</a></li>
                <li><a href="https://idm.gov.co/web/index.php/nuevo-esquema/4-normatividad/4-4-resoluciones/send/381-2022/716-resolucion-004-del-13-de-enero-de-2022" rel="nofollow">Procedimiento para adelantar contratos fiduciarios de regimen especial | Resolucion N° 004 - 2022</a></li>


                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/Matriz de interacción Partes Interesadas.xls" rel="nofollow">Matriz de interacción Partes Interesadas</a></li>
                <li><a href="mapa_procesos/mapa/gestionjuridica/otros documentos/Normograma 2020.doc" rel="nofollow">Normograma 2020</a></li>
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