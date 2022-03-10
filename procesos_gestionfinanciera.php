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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Gestion financiera</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Acta de Ar queo.doc" rel="nofollow">Acta de Ar queo</a></li>
                <!-- <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Arqueo Diario de Caja.xlsx" rel="nofollow">Arqueo Diario de Caja</a></li> -->
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Autorizacion gasto Caja Menor V1.xls" rel="nofollow">Autorizacion gasto Caja Menor V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Balance General V1.xls" rel="nofollow">Balance General V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Cert. Dispon. Presupuesta-Registro-Orden de Pago (1).xls" rel="nofollow">Cert. Dispon. Presupuesta-Registro-Orden de Pago (1)</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Cierre de Tesoreria.xlsx" rel="nofollow">Cierre de Tesoreria</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Conciliación de Gastos.xls" rel="nofollow">Conciliación de Gastos</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Conciliación de Ingresos.xls" rel="nofollow">Conciliación de Ingresos</a></li>
                
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Desprendible Nomina V2.xls" rel="nofollow">Desprendible de nomina V2</a></li>


                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Ejecución  Presupuestal Gastos.xls" rel="nofollow">Ejecución  Presupuestal Gastos</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Ejecución Presupuestal Ingresos.xls" rel="nofollow">Ejecución Presupuestal Ingresos</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Estado de Cambios  Patrimonio.xls" rel="nofollow">Estado de Cambios  Patrimonio</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Estado de la Actividad Economica.xls" rel="nofollow">Estado de la Actividad Economica</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Formatos Contabilidad.xlsx" rel="nofollow">Formatos Contabilidad</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Formatos tesoreria.xls" rel="nofollow">Formatos tesoreria</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Informe Diario de Ingresos.xlsx" rel="nofollow">Informe Diario de Ingresos</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Intereses cesantias.xls" rel="nofollow">Intereses cesantias</a></li>
                
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Lista documentos anexos para Cuentas contratistas V1.xlsx" rel="nofollow">Lista documentos anexos para Cuentas contratistas V1</a></li>

                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Nomina de  Funcionarios" rel="nofollow">Nomina de  Funcionarios</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Pago de Cesantias Anuales- Fondo de C.xls" rel="nofollow">Pago de Cesantias Anuales- Fondo de C</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Pago de Cesantias Fondo Nacional  del Ahorro Mensual.xls" rel="nofollow">Pago de Cesantias Fondo Nacional  del Ahorro Mensual</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Pago de Cesantias Mensuales-fondo de c.xls" rel="nofollow">Pago de Cesantias Mensuales-fondo de c.</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Paz y Salvo Valorización.xls" rel="nofollow">Paz y Salvo Valorización</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Planilla de Contratistas.xls" rel="nofollow">Planilla de Contratistas</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Prima de Navidad.xls" rel="nofollow">Prima de Navidad</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Prima de Servicios.xls" rel="nofollow">Prima de Servicios</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Aprobacion pagos tesoreria V1.xls" rel="nofollow">Aprobacion pagos tesoreria V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Reembolso de Caja Menor.xls" rel="nofollow">Reembolso de Caja Menor</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Remesa Ajuste Salarial.xls" rel="nofollow">Remesa Ajuste Salarial</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Rendimientos y Gastos Financieros.xls" rel="nofollow">Rendimientos y Gastos Financieros</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/formatos/Solicitud PAC, PAA y Banco de Proyectos.xls" rel="nofollow">Solicitud PAC, PAA y Banco de Proyectos</a></li>
                </ul>

                <h3>Manuales</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionfinanciera/manuales/RESOLUCION 225 DE DICIEMBRE 19 DE 2012.pdf" rel="nofollow">RESOLUCION 225 DE DICIEMBRE 19 DE 2012</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/manuales/MANUAL POLITICAS Y PROCEDIMIENTOS CONTABLES V2.pdf" rel="nofollow">MANUAL POLITICAS Y PROCEDIMIENTOS CONTABLES V2</a></li>
                </ul>

                <h3>Procedimientos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionfinanciera/procedimientos/Elaboracion, Ejecucion y Modificacion del Presupuesto V2.doc" rel="nofollow">Elaboración, Ejecución y Modificación del Presupuesto V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/procedimientos/Procedimiento Pagos a Proveedores V2.pdf" rel="nofollow">Pagos a Proveedores V2</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/procedimientos/Procedimiento para Manejo de Caja Menor V1.doc" rel="nofollow">Procedimiento para Manejo de Caja Menor V1</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/procedimientos/Recaudos.doc" rel="nofollow">Recaudos</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/procedimientos/Registro y Actualización Contable.doc" rel="nofollow">Registro y Actualización Contable</a></li>
                </ul> 
                
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/Caracterización Gestion financiera.xls" rel="nofollow">Caracterización</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/Indicador  Razón de Endeudamiento.docx" rel="nofollow">Indicador  Razón de Endeudamiento</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/Indicador  Solidez.docx" rel="nofollow">Indicador  Solidez</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/Indicador Capital Neto de Trabajo.docx" rel="nofollow">Indicador Capital Neto de Trabajo</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/Matriz partes interesadas Financiera.xls" rel="nofollow">Matriz partes interesadas Financiera</a></li>
                
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/MAPA RIESGOS GESTION FINANCIERA PARTE 1 V5.xlsx" rel="nofollow">Mapa de Riesgos 1 - V5</a></li>
                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/MAPA RIESGOS GESTION FINANCIERA PARTE 2 V5.xlsx" rel="nofollow">Mapa de Riesgos 2 - V5</a></li>

                <li><a href="mapa_procesos/mapa/gestionfinanciera/otrosdocumentos/Normograma 2020.doc" rel="nofollow">Normograma 2020</a></li>
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