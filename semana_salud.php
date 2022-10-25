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
                <div style="font-size: 28pt"><b>Semana de la salud y bienestar social</b></div>
                <div style="font-size: 18pt">Cronograma de actividades</div>
            </div>

            <div class="col-md-12" align="center">
                <div><img src="img/logo_salud.jpg" width="50%"></div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th style="width: 15%;">Fecha</th>
                            <th style="width: 35%;">Actividad</th>
                            <th style="width: 20%;">Facilitador</th>
                            <th style="width: 10%;">Hora</th>
                            <th style="width: 20%;">Asistencia</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Ocubre 26</td>
                            <td>Socialización Psicóloga y Presentación de semana de la salud y bienestar social.</td>
                            <td>Directivos y psicologa IDM</td>
                            <td>7.20 am</td>
                            <td>En directo</td>
                        </tr>

                        <tr>
                            <td>Ocubre 26</td>
                            <td>Manejo del estrés.</td>
                            <td>Nueva EPS </td>
                            <td>8 am</td>
                            <td>El enlace se envia el mismo dia</td>
                        </tr>

                        <tr>
                            <td>Ocubre 26</td>
                            <td>Apertura semana de la salud y bienestar.</td>
                            <td>IDM</td>
                            <td>11 am</td>
                            <td><a href="https://meet.google.com/mnt-kmgr-gvm">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Ocubre 27</td>
                            <td>Técnica de lavado de manos.</td>
                            <td>Nueva EPS </td>
                            <td>8 am</td>
                            <td>El enlace se envia el mismo dia</td>
                        </tr>

                        <tr>
                            <td>Ocubre 28</td>
                            <td>Estrategia 4x4 </td>
                            <td>Nueva EPS </td>
                            <td>8 am</td>
                            <td>El enlace se envia el mismo dia</td>
                        </tr>

                        <tr>
                            <td>Ocubre 28</td>
                            <td>Concurso lavado de manos. </td>
                            <td>IDM</td>
                            <td>10 am</td>
                            <td><a href="https://meet.google.com/dtw-zixp-vam">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Ocubre 29</td>
                            <td>Prevención de cáncer de mama.</td>
                            <td>Nueva EPS</td>
                            <td>8 am</td>
                            <td>El enlace se envia el mismo dia</td>
                        </tr>

                        <tr>
                            <td>Ocubre 29</td>
                            <td>Super cerebro, mejorando la salud mental.</td>
                            <td>IDM</td>
                            <td>10 am</td>
                            <td><a href="https://meet.google.com/nvi-pohp-wam">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Ocubre 29</td>
                            <td>Actividad para niños menores de 12 años.</td>
                            <td>IDM</td>
                            <td>1.30 pm</td>
                            <td><a href="https://meet.google.com/ikx-cbtz-ffk">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Ocubre 30</td>
                            <td>Actividad fisica.</td>
                            <td>Nueva EPS </td>
                            <td>8 am</td>
                            <td>El enlace se envia el mismo dia</td>
                        </tr>

                        <tr>
                            <td>Ocubre 30</td>
                            <td>Celebracion dia de los niños.</td>
                            <td>IDM</td>
                            <td>11 am</td>
                            <td>Presencial</td>
                        </tr>

                        <tr>
                            <td>Noviembre 03</td>
                            <td>Orientación vocacional para adolescentes.</td>
                            <td>IDM</td>
                            <td>2 pm</td>
                            <td><a href="https://meet.google.com/bxv-wths-xmn">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 04</td>
                            <td>Ganador concurso lavado de manos.</td>
                            <td>IDM</td>
                            <td>8 am</td>
                            <td><a href="https://meet.google.com/tnu-cuim-ygk">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 04</td>
                            <td>Oftalmología.</td>
                            <td>Óptica las gafas </td>
                            <td>9 am</td>
                            <td>Presencial</td>
                        </tr>

                        <tr>
                            <td>Noviembre 05</td>
                            <td>Beneficios de los aceites esenciales.</td>
                            <td>Victor Hugo</td>
                            <td>9 am</td>
                            <td><a href="https://meet.google.com/uam-dxxs-wgy">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 05</td>
                            <td>Medidas y perdidas de peso, nutrición</td>
                            <td>Beatriz Ramirez</td>
                            <td>11 am</td>
                            <td><a href="https://meet.google.com/nmv-pzhm-xkx">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 06</td>
                            <td>Yoga</td>
                            <td>Johanny Arenas</td>
                            <td>7 am</td>
                            <td><a href="https://meet.google.com/oqw-twbr-dxt">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 06</td>
                            <td>Trabajo en equipo, Conociéndonos (1 grupo)</td>
                            <td>Psicologa IDM</td>
                            <td>11 am</td>
                            <td><a href="https://meet.google.com/vcg-vemg-rtt">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 09</td>
                            <td>Esparcimiento en familia.</td>
                            <td>Nora Olarte</td>
                            <td>10 am</td>
                            <td><a href="https://meet.google.com/bez-mbns-usn">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 09</td>
                            <td>Odontologia</td>
                            <td>Lorena</td>
                            <td>11 am</td>
                            <td>Presencial</td>
                        </tr>

                        <tr>
                            <td>Noviembre 09</td>
                            <td>Pausas activas y estilos de vida saludable.</td>
                            <td>IDM</td>
                            <td>12 m</td>
                            <td>Presencial y virtual</td>
                        </tr>

                        <tr>
                            <td>Noviembre 10</td>
                            <td>Cuidado de rostro y clases del cuidado de la piel.</td>
                            <td>Yina Montoya</td>
                            <td>11 am</td>
                            <td><a href="https://meet.google.com/inz-gbpq-xvx">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 10</td>
                            <td>Cuidado del cabello y uñas. </td>
                            <td>Yadira Hernandez</td>
                            <td>2 pm</td>
                            <td><a href="https://meet.google.com/abh-ecbb-rxm">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 11</td>
                            <td>Trabajo en equipo, Conociéndonos (2 grupo) </td>
                            <td>Psicologa IDM </td>
                            <td>11 am</td>
                            <td><a href="https://meet.google.com/dvf-cten-hes">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 12</td>
                            <td>Celebracion (dia del hombre y padre) y (dia de la mujer, secretaria y madre), Funcionarios de planta.</td>
                            <td>IDM</td>
                            <td>8 am</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Noviembre 13</td>
                            <td>Rifa de anchetas para contratistas.</td>
                            <td>IDM</td>
                            <td>2 pm</td>
                            <td><a href="https://meet.google.com/oay-uzeo-gwo">Google MEET</a></td>
                        </tr>

                        <tr>
                            <td>Noviembre 13</td>
                            <td>Dia de la familia.</td>
                            <td>IDM</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
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