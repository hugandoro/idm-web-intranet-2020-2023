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
                        <a class="nav-link" href="">Directorio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 28pt"><b>Intranet Institucional</b></div>
                <div style="font-size: 18pt">IDM | Mapa de procesos</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <center>
                <table width="400" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="82" rowspan="11"><img src="mapa_procesos/img/largo1.jpg" width="82" height="646" /></td>
                    <td width="39" rowspan="11"><img src="mapa_procesos/img/largo3.jpg" width="39" height="646" /></td>
                    <td colspan="3"><a href="procesos_direccionamientoyplaneacion.php"><img src="mapa_procesos/img/ancho1_a.jpg" width="361" height="147" /></a></td>
                    <td colspan="3"><a href="procesos_gestiondeltalentohumano.php"><img src="mapa_procesos/img/ancho1_M.jpg" width="361" height="147" /></a></td>
                    <td width="89" rowspan="11"><img src="mapa_procesos/img/largo2.jpg" width="89" height="646" /></td>
                </tr>
                <tr>
                    <td height="86" colspan="6"><div align="center"><img src="mapa_procesos/img/Misionales_1.jpg" width="713" height="86" align="middle" /></div></td>
                </tr>
                <tr>
                    <td height="53" colspan="6"><div align="center"><a href="procesos_viviendayurbanismo.php"><img src="mapa_procesos/img/Misionales_2.jpg" width="713" height="53" /></a></div></td>
                </tr>
                <tr>
                    <td height="27" colspan="6"><div align="center"><img src="mapa_procesos/img/Misionales_3.jpg" width="713" height="27" align="middle" /></div></td>
                </tr>
                <tr>
                    <td height="54" colspan="6"><div align="center"><a href="procesos_obrasdeinterespublicoporvalorizacion.php"><img src="mapa_procesos/img/Misionales_4.jpg" width="713" height="54" /></a></div></td>
                </tr>
                <tr>
                    <td height="33" colspan="6"><div align="center"><img src="mapa_procesos/img/Misionales_5.jpg" width="713" height="33" /></div></td>
                </tr>
                <tr>
                    <td height="44" colspan="6"><div align="center"><img src="mapa_procesos/img/Apoyo_1.jpg" width="718" height="44" /></div></td>
                </tr>
                <tr>
                    <td width="220" height="90" colspan="2"><a href="procesos_gestionrecursosfisicosytecnologicos.php"><img src="mapa_procesos/img/Apoyo_2(2).jpg" width="220" height="90" /></a></td>
                    <td width="220" height="90" colspan="2"><div align="center"><a href="procesos_gestionfinanciera.php"><img src="mapa_procesos/img/Apoyo_3(2).jpg" width="220" height="90" /></a></div></td>
                    <td width="220" height="90" colspan="2"><div align="center"><a href="procesos_gestionjuridica.php"><img src="mapa_procesos/img/Apoyo_4(2).jpg" width="222" height="90" align="right" /></a></div></td>
                </tr>
                <tr>
                    <td colspan="6"><a href="procesos_controlyevaluacion.php"><img src="mapa_procesos/img/ancho9.jpg" width="716" height="96" /></a></td>
                </tr>
                </table>
                </center>

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