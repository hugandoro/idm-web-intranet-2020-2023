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

    <meta name="application-name" content="Intranet - Empresa de Desarrollo Urbano y Rural de Dosquebradas">
    <meta name="author" content="Empresa de Desarrollo Urbano y Rural de Dosquebradas - IDM">
    <meta name="description" content="Intranet Institucional">
    <meta name="generator" content="Intranet - EDOS">
    <meta name="keywords" content="EDOS, Intranet, Dosquebradas">

    <title>EDOS | Intranet institucional</title>

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
                        <a class="nav-link" href="https://intranet.edos.gov.co/mapa_procesos/Repositorio_EDOS_2022/">Calidad EDOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="memoria_institucional.php">Memoria institucional y del conocimiento |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://soporte.idm.gov.co">Soporte TIC |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.edos.gov.co/index.php/home/funcionarios">Directorio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 28pt"><b>Intranet Institucional</b></div>
                <div style="font-size: 18pt">EDOS | Memoria institucional y del conocimiento</div>
            </div>
        </div>

        <hr>

        <div class="col-lg-12 mb-12">
            <img src="img/Inspiration-WP.jpg" width="100%">
        </div>

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
                <hr><center>Repositorio de memorias de eventos, capacitacones, seminarios, entre otros, de interes intitucional</center><hr>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-lg-6 mb-6">
                <h3>Capacitaciones</h3>
                <ul class="tmo_list">

                    <li><a href="memoria/cap_acoso_laboral.pdf">Acoso laboral</a></li>
                    <li><a href="memoria/cap_conflicto_interes.pdf">Conflicto de intereses</a></li>
                    
                    <li><a href="memoria/cap_servicio_ciudadano.pdf">Servicio al ciudadano| 2020</a></li>
                    <li><a href="memoria/capacitacion_participacion_ciudadana_2020.pdf">Mecanismos de participacion ciudadana | Agosto 2020</a></li>

                    <li><a href="memoria/cap_gestion_documental.pdf">Gestion documental | Febrero 2021</a></li>
                    <li><a href="memoria/codigo_colores_2021.pdf">Codigo de colores | 2021</a></li>
                    <li><a href="memoria/prevencion_fraude_2021.ppt">Prevencion del fraude | 2021</a></li>
                    <li><a href="memoria/Sistema integrado de conservacion SIC - 2021.ppt">Sistema integrado de conservacion SIC | 2021</a></li>
                    <li><a href="memoria/Roles control interno - 2021.ppt">Roles control interno | 2021</a></li>
                    <li><a href="memoria/cap_gestion_conocimiento_junio_2021.pdf">Gestion del conocimiento | Junio 2021</a></li>
                    <li><a href="memoria/cap_generalidades_SST.pdf">Generalidades SST | 2021</a></li>

                    <li><a href="memoria/Digitalizacion de documentos AGN 2022.pdf">Digitalizacion de documentos AGN | 2022</a></li>
                    <li><a href="memoria/cap_SIC_2022.ppt">Capacitacion SIC | 2022</a></li>

                </ul>
            </div>

            <div class="col-lg-6 mb-6">
                <h3>Congresos, simposios, seminarios</h3>
                <ul class="tmo_list">
                    <li>Proximamente contenido para descargar</li>
                </ul>
            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="img/logo_idm.png" alt="" width="100%">
                        <small class="d-block mb-3 text-muted">Empresa de Desarrollo Urbano y Rural de Dosquebradas</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small>
                    </center>
                </div>
                <div class="col-6 col-md">
                    <h5>Institucional</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.edos.gov.co">EDOS Portal web oficial</a></li>
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