<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);
$currentPage = $_SERVER["PHP_SELF"];
?>

<!-- CONTADOR DE VISITAS -->
<?php
$archivo = "contador.txt"; //el archivo que contiene en numero
$f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
if ($f) {
    $contador = fread($f, filesize($archivo)); //leemos el archivo
    $contador = $contador + 1; //sumamos +1 al contador
    fclose($f);
}
$f = fopen($archivo, "w+");
if ($f) {
    fwrite($f, $contador);
    fclose($f);
}
?>
<!-- FIN CONTADOR -->

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="application-name" content="Intranet - Empresa de Desarrollo Urbano y Rural de Dosquebradas">
    <meta name="author" content="Empresa de Desarrollo Urbano y Rural de Dosquebradas">
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
                        <a class="nav-link" href="index.php">De interes general |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_mapa.php">Sistema de Calidad |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://intranet.edos.gov.co/mapa_procesos/Repositorio_EDOS_2022/">Calidad EDOS |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="memoria_institucional.php">Memoria institucional y del conocimiento |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://soporte.idm.gov.co">Soporte TIC |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.edos.gov.co/index.php/home/funcionarios">Directorio |</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 28pt"><b>Intranet Institucional</b></div>
                <div style="font-size: 18pt">EDOS | Empresa de Desarrollo Urbano y Rural de Dosquebradas</div>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-lg-12 mb-12">
                <div><a href="https://historico.cnsc.gov.co/index.php/entidades-orden-territorial-2022-normatividad"><img class="card-img-top" src="/img/BANNER-WEB-EOT-2022-INSCRIPCIONES-ASCENSO.png"></a></div>
            </div>

            <div class="col-lg-4 mb-4">
                <div><a href="https://idm.netsaia.com/views/login/login.php"><img class="card-img-top" src="/img/SAIA-software-de-gestion-documental-1.png"></a></div>
            </div>

            <div class="col-lg-4 mb-4">
                <br><br><div><a href="https://idm.netsaia.com/views/login/login.php"><img class="card-img-top" src="/manuales_saia/logo.png"></a></div><br>
                <div><a href="manuales_saia/MANUAL USUARIO GENERAL SAIA V 8.0 V.1.pdf">.:: Manual de usuario general</a></div>
                <div><a href="manuales_saia/09-09-2020 MANUAL USUARIO GESTOR PQRSF SAIA V8.0 - V.1.pdf">.:: Manual Gestor de PQRSF</a></div>
                <div><a href="manuales_saia/23-07-2020 MANUAL USUARIO GESTOR CORRESPONDENCIA SAIA V 8.0 V.1.pdf">.:: Manual de gestor de correspondencia</a></div>
                <div><a href="manuales_saia/31-08-2020 MANUAL USUARIO ADMINISTRADOR SAIA V 8.0 V.1.pdf">.:: Manual de usuario administrador</a></div>
                <div><a href="manuales_saia/04-03-2021 MANUAL COMUNICACIONES SAIA V 8.0 V 1.pdf">.:: Manual de comunicaciones</a></div>
            </div>

            <div class="col-lg-4 mb-4">
                <div><a href="https://capacitate.idm.gov.co"><img class="card-img-top" src="/img/capacitate_banner_1.png"></a></div>
            </div>

        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12 mb-12">
                <div><a href="https://mivacuna.sispro.gov.co/MiVacuna/Account/Login"><img src="/img/Banner_MiVacuna.png" width=100%></a></div>
            </div>
        </div>

        <hr>

        <!-- Tarjetas -->
        <div class="row">

            <div class="col-lg-6 mb-6">
                <div class="card h-100 box-shadow" align="center">
                    <div><a href="https://soporte.idm.gov.co"><img class="card-img-top" src="img/mesa_tic.png"></a></div>
                </div>
            </div>

            <div class="col-lg-6 mb-6">
                <div class="card h-100 box-shadow" align="center">
                    <div><a href="http://www.colcert.gov.co/"><img class="card-img-top" src="img/seguridad_digital.png"></a></div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-lg-12 mb-12">
                <div align="center">
                    <div><a href="manuales_glpi/Manual Mesa de Ayuda GLPI IDM.pdf">
                            <h5>Manual de ayuda - Mesa soporte TIC</h5>
                        </a></div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-lg-6 mb-6">
                <div class="card h-100 box-shadow" align="center">
                    <div><a href="#"><img class="card-img-top" src="img/bici1.jpg"></a></div>
                </div>
            </div>

            <div class="col-lg-6 mb-6">
                <div class="card h-100 box-shadow" align="center">
                    <div><a href="#"><img class="card-img-top" src="img/bici2.jpg"></a></div>
                </div>
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
            <div class="col-md-6" align="center">
                <div style="font-size: 100pt"><b><?php echo $contador; ?></b></div><br>
                <div style="font-size: 24pt">Consultas a la intranet</div>
            </div>
            <div class="col-md-6" align="center">
                <div style="font-size: 100pt"><b><?php echo "00"; ?></b></div><br>
                <div style="font-size: 24pt">Accidentes laborales 2022</div>
            </div>
        </div>

        <hr>

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