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
                <div style="font-size: 18pt">IDM | Instituto de Desarrollo Municipal | Mapa de procesos | Manuales</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Procesos de Control y Evaluación</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_control_evaluacion/Accion Correctiva y Preventiva Calidad y  SST (4).doc" rel="nofollow">Accion Correctiva y Preventiva Calidad y  SST (4)</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_control_evaluacion/Administración y Valoración del Riesgo.doc" rel="nofollow">Administración y Valoración del Riesgo</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_control_evaluacion/Auditoria Interna de Calidad y SST (1).docx" rel="nofollow">Auditoria Interna de Calidad y SST (1)</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_control_evaluacion/Auditorias de Control Interno.doc" rel="nofollow">Auditorias de Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_control_evaluacion/Evaluación y Seguimiento Control Interno.doc" rel="nofollow">Evaluación y Seguimiento Control Interno</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_control_evaluacion/Informes de Control Interno.doc" rel="nofollow">Informes de Control Interno</a></li>
                </ul>

                <h3>Procesos de Direccionamiento y Planeación</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Atención  la Comunidad.doc" rel="nofollow">Atención  la Comunidad</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Elaboración del plan operativo anual de inversión.docx" rel="nofollow">Elaboración del plan operativo anual de inversión</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Elaboración Plan de Acción.docx" rel="nofollow">Elaboración Plan de Acción</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Elaboración Proyectos de Inversión.docx" rel="nofollow">Elaboración Proyectos de Inversión</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Medir la  Satisfacción de la Comunidad.doc" rel="nofollow">Medir la  Satisfacción de la Comunidad</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Revisión por la Direccion IDM.doc" rel="nofollow">Revisión por la Direccion IDM</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_direccionamiento/Tratamiento de Quejas, Reclamos y Sugerencias-o.k.doc" rel="nofollow">Tratamiento de Quejas, Reclamos y Sugerencias-o.k</a></li>
                </ul> 
                                    
                <h3>Procesos de Gestión del Recurso Humano</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_humano/Administracion de Personal.doc" rel="nofollow">Administracion de Personal</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_humano/Bienestar Social e Incentivos.doc" rel="nofollow">Bienestar Social e Incentivos</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_humano/Desarrollo de Competencias Laborales.doc" rel="nofollow">Desarrollo de Competencias Laborales</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_humano/Planificación y Evaluación de Desempeño ( 1).doc" rel="nofollow">Planificación y Evaluación de Desempeño ( 1)</a></li>
                </ul>            
                    
                <h3>Procesos Gestión Financiera</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_financiera/Elaboración, Ejecución y Modificación del Presupuesto.doc" rel="nofollow">Elaboración, Ejecución y Modificación del Presupuesto</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_financiera/Pagos a Proveedores.doc" rel="nofollow">Pagos a Proveedores</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_financiera/Recaudos.doc" rel="nofollow">Recaudos</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_financiera/Registro y Actualización Contable.doc" rel="nofollow">Registro y Actualización Contable</a></li>
                </ul>  

                <h3>Procesos Gestión Jurídica</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Acción de Tutela-.doc" rel="nofollow">Acción de Tutela</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Derechos de Petición.doc" rel="nofollow">Derechos de Petición</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Para Proceso Ordinario ( Control Disciplinario).doc" rel="nofollow">Para Proceso Ordinario ( Control Disciplinario)</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Procedimiento Contractual para las distintas Modalidades de selección.doc" rel="nofollow">Procedimiento Contractual para las distintas Modalidades de selección</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Procedimiento Recursos de Reposición.doc" rel="nofollow">Procedimiento Recursos de Reposición</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Proceso para Recursos ( Cotrol Disiciplinario).doc" rel="nofollow">Proceso para Recursos ( Cotrol Disiciplinario)</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_juridica/Proceso Verbal ( Control Disciplinario).doc" rel="nofollow">Proceso Verbal ( Control Disciplinario)</a></li>
                </ul>

                <h3>Procesos de Vivienda, Urbanismo y Obras de Interés Público</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_vivienda_urbanismo/Apoyo Social.doc" rel="nofollow">Apoyo Social</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_vivienda_urbanismo/Cerramiento de Lotes.doc" rel="nofollow">Cerramiento de Lotes</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_vivienda_urbanismo/Control de salidas no Conformes.doc" rel="nofollow">Control de salidas no Conformes</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_vivienda_urbanismo/Diseño y Desarrollo.doc" rel="nofollow">Diseño y Desarrollo</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_vivienda_urbanismo/Organización e Impulso a la Vivienda.doc" rel="nofollow">Organización e Impulso a la Vivienda</a></li>
                </ul>  

                <h3>Procesos de Gestión de Recursos Físicos y Tecnológicos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_recursos_fisicos_tic/Administración de Recursos Técnologicos.doc" rel="nofollow">Administración de Recursos Técnologicos</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_recursos_fisicos_tic/Control de la Gestión Documentada del Sistema Integral de Gestión.doc" rel="nofollow">Control de la Gestión Documentada del Sistema Integral de Gestión</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_recursos_fisicos_tic/Registro de Inventarios.doc" rel="nofollow">Registro de Inventarios</a></li>
                <li><a href="mapa_procesos/mapa/Control y Evaluacion/manualdeprocesosyprocedimientos/procesos_recursos_fisicos_tic/Ventanilla Unica V1 (1).doc" rel="nofollow">Ventanilla Unica V1 (1)</a></li>
                </ul>

            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="img/logo_idm.png" alt="" width="100%">
                    <small class="d-block mb-3 text-muted">Empresa de Desarrollo Urbano y Rural de Dosquebradas</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small></center>
                </div>
                <div class="col-6 col-md">
                    <h5>Institucional</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://www.edos.gov.co">EDOS Portal web oficial</a></li>
                        <li><a class="text-muted" href="https://bien.edos.gov.co">BIEN - Base institucional estadistica normativa</a></li>
                        <li><a class="text-muted" href="https://saga.edos.gov.co">SAGA - Sistema asistencial gestor de archivo</a></li>
                        <li><a class="text-muted" href="https://soporte.edos.gov.co">MESA TIC - Mesa de ayuda y soporte TIC</a></li>
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