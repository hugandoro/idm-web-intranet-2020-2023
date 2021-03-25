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
                        <a class="nav-link" href="semana_salud.php">Semana de la Salud y Bienestar Social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Capacitaciones</a>
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
                <div style="font-size: 18pt">IDM | Instituto de Desarrollo Municipal | Dosquebradas</div>
            </div>
        </div>

        <hr>

        <!-- Tarjetas -->
        <div class="row">

            <div class="col-lg-6 mb-6">
                <div class="card h-100 box-shadow" align="center">
                    <div><a href="#"><img class="card-img-top" src="img/sura1.jpg"></a></div>
                </div>
            </div>

            <div class="col-lg-6 mb-6">
                <div class="card h-100 box-shadow" align="center">
                    <div><a href="#"><img class="card-img-top" src="img/sura3.jpg"></a></div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3" align="center">
            </div>
            <div class="col-md-6" align="center">
                <div><a href="#"><img src="img/sura2.jpg" width="100%"></div></a>
            </div>
            <div class="col-md-3" align="center">
            </div>
        </div>

        <hr>

        <!--
        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 18pt"><b>Estimado Funcionario / Contratista, participa en la encuesta para la formulación del Plan de Anticorrupción y de Atención al Ciudadano</b></div>
            </div>
            
            <div class="col-md-12" align="center">
                <br>
                <a href="https://forms.gle/DwgaSqJJQaGrBRne8"><button type="button" class="btn btn-warning btn-block">Ingresar a la encuesta en linea...</button></a>
                <br>
            </div>
        </div>

        <hr>-->

        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">

            <div class="col-lg-4 mb-4">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-success text-white">
                        <h5 class="my-0 font-weight-normal">Milán La Pradera - Prado Verde</h5>
                    </div>

                    <div><a href="https://www.idm.gov.co/web/index.php/plan-de-movilidad/solucion-vial-milan-la-pradera-prado-verde" target="_blank"><img class="card-img-top" src="img/M3.jpg"></a></div>

                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-success text-white">
                        <h5 class="my-0 font-weight-normal">La Popa – Fase Uno</h5>
                    </div>

                    <div><a href="https://www.idm.gov.co/web/index.php/plan-de-movilidad/solucion-vial-la-popa-fase-uno" target="_blank"><img class="card-img-top" src="img/M1.jpg"></a></div>

                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 box-shadow" align="center">
                    <div class="card-header bg-success text-white">
                        <h5 class="my-0 font-weight-normal">Quebrada La Víbora - Molivento</h5>
                    </div>

                    <div><a href="https://www.idm.gov.co/web/index.php/plan-de-movilidad/solucion-vial-quebrada-la-vibora-molivento" target="_blank"><img class="card-img-top" src="img/M2.jpg"></a></div>

                </div>
            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="img/logo_idm.png" alt="" width="100%">
                        <small class="d-block mb-3 text-muted">Instituo de Desarrollo Municipal</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small>
                    </center>
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