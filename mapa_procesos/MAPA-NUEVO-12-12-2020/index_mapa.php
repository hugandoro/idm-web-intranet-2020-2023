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

    <style type="text/css">
        td img {
            display: block;
        }
    </style>
    <!--Fireworks 8 Dreamweaver 8 target.  Created Sat Dec 12 16:52:22 GMT-0500 2020-->
    <script language="JavaScript1.2" type="text/javascript">
        <!--
        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_swapImage() { //v3.0
            var i, j = 0,
                x, a = MM_swapImage.arguments;
            document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) {
                    document.MM_sr[j++] = x;
                    if (!x.oSrc) x.oSrc = x.src;
                    x.src = a[i + 2];
                }
        }

        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr;
            for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }

        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length,
                    a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }

        //
        -->
    </script>

</head>

<!-- <body style="background-color:#F1F7E5;"> -->

<body style="background-color:#ffffff;" onload="MM_preloadImages('mapa_procesos/img/mapa_procesos_r2_c4_f2.jpg','mapa_procesos/img/mapa_procesos_r2_c7_f3.jpg','mapa_procesos/img/mapa_procesos_r4_c5_f4.jpg','mapa_procesos/img/mapa_procesos_r6_c5_f5.jpg','mapa_procesos/img/mapa_procesos_r8_c4_f6.jpg','mapa_procesos/img/mapa_procesos_r8_c6_f7.jpg','mapa_procesos/img/mapa_procesos_r8_c7_f8.jpg','mapa_procesos/img/mapa_procesos_r8_c8_f9.jpg','mapa_procesos/img/mapa_procesos_r10_c4_f10.jpg');">

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
                        <a class="nav-link" href="index.php">Informacion Institucional</a>
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
                    <table border="0" cellpadding="0" cellspacing="0" width="960">
                        <tr>
                            <td><img src="mapa_procesos/img/spacer.gif" width="8" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="99" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="23" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="17" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="152" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="188" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="183" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="152" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="32" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="106" height="1" border="0" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="1" border="0" alt="" /></td>
                        </tr>

                        <tr>
                            <td colspan="10"><img name="mapa_procesos_r1_c1" src="mapa_procesos/img/mapa_procesos_r1_c1.jpg" width="960" height="18" border="0" id="mapa_procesos_r1_c1" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="18" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td rowspan="10"><img name="mapa_procesos_r2_c1" src="mapa_procesos/img/mapa_procesos_r2_c1.jpg" width="8" height="682" border="0" id="mapa_procesos_r2_c1" alt="" /></td>
                            <td rowspan="9"><img name="mapa_procesos_r2_c2" src="mapa_procesos/img/mapa_procesos_r2_c2.jpg" width="99" height="663" border="0" id="mapa_procesos_r2_c2" alt="" /></td>
                            <td rowspan="10"><img name="mapa_procesos_r2_c3" src="mapa_procesos/img/mapa_procesos_r2_c3.jpg" width="23" height="682" border="0" id="mapa_procesos_r2_c3" alt="" /></td>
                            <td colspan="3"><a href="procesos_direccionamientoyplaneacion.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r2_c4','','mapa_procesos/img/mapa_procesos_r2_c4_f2.jpg',1);"><img name="mapa_procesos_r2_c4" src="mapa_procesos/img/mapa_procesos_r2_c4.jpg" width="357" height="149" border="0" id="mapa_procesos_r2_c4" alt="" /></a></td>
                            <td colspan="3"><a href="procesos_gestiondeltalentohumano.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r2_c7','','mapa_procesos/img/mapa_procesos_r2_c7_f3.jpg',1);"><img name="mapa_procesos_r2_c7" src="mapa_procesos/img/mapa_procesos_r2_c7.jpg" width="367" height="149" border="0" id="mapa_procesos_r2_c7" alt="" /></a></td>
                            <td rowspan="9"><img name="mapa_procesos_r2_c10" src="mapa_procesos/img/mapa_procesos_r2_c10.jpg" width="106" height="663" border="0" id="mapa_procesos_r2_c10" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="149" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="6"><img name="mapa_procesos_r3_c4" src="mapa_procesos/img/mapa_procesos_r3_c4.jpg" width="724" height="125" border="0" id="mapa_procesos_r3_c4" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="125" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td rowspan="4"><img name="mapa_procesos_r4_c4" src="mapa_procesos/img/mapa_procesos_r4_c4.jpg" width="17" height="167" border="0" id="mapa_procesos_r4_c4" alt="" /></td>
                            <td colspan="4"><a href="procesos_viviendayurbanismo.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r4_c5','','mapa_procesos/img/mapa_procesos_r4_c5_f4.jpg',1);"><img name="mapa_procesos_r4_c5" src="mapa_procesos/img/mapa_procesos_r4_c5.jpg" width="675" height="65" border="0" id="mapa_procesos_r4_c5" alt="" /></a></td>
                            <td rowspan="4"><img name="mapa_procesos_r4_c9" src="mapa_procesos/img/mapa_procesos_r4_c9.jpg" width="32" height="167" border="0" id="mapa_procesos_r4_c9" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="65" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="4"><img name="mapa_procesos_r5_c5" src="mapa_procesos/img/mapa_procesos_r5_c5.jpg" width="675" height="10" border="0" id="mapa_procesos_r5_c5" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="10" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="4"><a href="procesos_obrasdeinterespublicoporvalorizacion.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r6_c5','','mapa_procesos/img/mapa_procesos_r6_c5_f5.jpg',1);"><img name="mapa_procesos_r6_c5" src="mapa_procesos/img/mapa_procesos_r6_c5.jpg" width="675" height="65" border="0" id="mapa_procesos_r6_c5" alt="" /></a></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="65" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="4"><img name="mapa_procesos_r7_c5" src="mapa_procesos/img/mapa_procesos_r7_c5.jpg" width="675" height="27" border="0" id="mapa_procesos_r7_c5" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="27" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="procesos_tecnologia.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r8_c4','','mapa_procesos/img/mapa_procesos_r8_c4_f6.jpg',1);"><img name="mapa_procesos_r8_c4" src="mapa_procesos/img/mapa_procesos_r8_c4.jpg" width="169" height="134" border="0" id="mapa_procesos_r8_c4" alt="" /></a></td>
                            <td><a href="procesos_gestionrecursosfisicosytecnologicos.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r8_c6','','mapa_procesos/img/mapa_procesos_r8_c6_f7.jpg',1);"><img name="mapa_procesos_r8_c6" src="mapa_procesos/img/mapa_procesos_r8_c6.jpg" width="188" height="134" border="0" id="mapa_procesos_r8_c6" alt="" /></a></td>
                            <td><a href="procesos_gestionfinanciera.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r8_c7','','mapa_procesos/img/mapa_procesos_r8_c7_f8.jpg',1);"><img name="mapa_procesos_r8_c7" src="mapa_procesos/img/mapa_procesos_r8_c7.jpg" width="183" height="134" border="0" id="mapa_procesos_r8_c7" alt="" /></a></td>
                            <td colspan="2"><a href="procesos_gestionjuridica.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r8_c8','','mapa_procesos/img/mapa_procesos_r8_c8_f9.jpg',1);"><img name="mapa_procesos_r8_c8" src="mapa_procesos/img/mapa_procesos_r8_c8.jpg" width="184" height="134" border="0" id="mapa_procesos_r8_c8" alt="" /></a></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="134" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="6"><img name="mapa_procesos_r9_c4" src="mapa_procesos/img/mapa_procesos_r9_c4.jpg" width="724" height="7" border="0" id="mapa_procesos_r9_c4" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="7" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td colspan="6"><a href="procesos_controlyevaluacion.php" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('mapa_procesos_r10_c4','','mapa_procesos/img/mapa_procesos_r10_c4_f10.jpg',1);"><img name="mapa_procesos_r10_c4" src="mapa_procesos/img/mapa_procesos_r10_c4.jpg" width="724" height="81" border="0" id="mapa_procesos_r10_c4" alt="" /></a></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="81" border="0" alt="" /></td>
                        </tr>
                        <tr>
                            <td><img name="mapa_procesos_r11_c2" src="mapa_procesos/img/mapa_procesos_r11_c2.jpg" width="99" height="19" border="0" id="mapa_procesos_r11_c2" alt="" /></td>
                            <td colspan="7"><img name="mapa_procesos_r11_c4" src="mapa_procesos/img/mapa_procesos_r11_c4.jpg" width="830" height="19" border="0" id="mapa_procesos_r11_c4" alt="" /></td>
                            <td><img src="mapa_procesos/img/spacer.gif" width="1" height="19" border="0" alt="" /></td>
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