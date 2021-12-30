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
                <div style="font-size: 18pt">IDM | Mapa de procesos | Salud en el trabajo</div>
            </div>
        </div>

        <hr>
        <br id="AnclaParticipacion">

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-12 mb-12">
 
                <h3>Formatos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Asignacion de Recursos SGSST V1.xls" rel="nofollow">Asignacion de Recursos SGSST V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Carta de asignacion de responsable del SGSST V1.doc" rel="nofollow">Carta de asignacion de responsable del SGSST V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Control uso Boutiquin.xls" rel="nofollow">Control uso Boutiquin</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Entrega Individual de EPP.xls" rel="nofollow">Entrega Individual de EPP</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Evaluación de Simulacros SST.doc" rel="nofollow">Evaluación de Simulacros SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Gestion del cambio en SST.doc" rel="nofollow">Gestion del cambio en SST</a></li>

                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Lista de Verificacion Diaria Motocicleta V1.doc" rel="nofollow">Lista de Verificacion Diaria Motocicleta V1</a></li>

                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Inspección de Seguridad V2.xls" rel="nofollow">Inspeccion de Seguridad V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Inspección Mensual de botiquines.doc" rel="nofollow">Inspección Mensual de botiquines</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Inspección Mensual de Extintores.doc" rel="nofollow">Inspección Mensual de Extintores</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Investigación de incidentes y accidentes de trabajo.xls" rel="nofollow">Investigación de incidentes y accidentes de trabajo</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Programa de capacitacion SST.doc" rel="nofollow">Programa de capacitacion SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Reporte de condiciones inseguras y de salud.doc" rel="nofollow">Reporte de condiciones inseguras y de salud</a></li>

                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/formatos/Limpieza y desinfeccion de Instalaciones fisicas IDM V1.docx" rel="nofollow">Limpieza y desinfeccion de Instalaciones fisicas IDM V1</a></li>
                </ul>

                <h3>Instructivos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/GTC 45 2012 Metodologia IPVR.pdf" rel="nofollow">Guía técnica GT45 para la identificacion de peligros y valoracion de riesgos SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo  Matriz de Riesgos especifica COVID-19.pdf" rel="nofollow">Instructivo  Matriz de Riesgos especifica COVID-19</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para Control de Requisitos legales SST.doc" rel="nofollow">Instructivo para Control de Requisitos legales SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para Investigación de Incidentes, Accidentes de trabajo  y Enfermedad laboral.doc" rel="nofollow">Instructivo para Investigación de Incidentes, Accidentes de trabajo  y Enfermedad laboral</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para la Gestión del Cambio SST.doc" rel="nofollow">Instructivo para la Gestión del Cambio SST</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Instructivo para Limpieza y desinfeccion V1.pdf" rel="nofollow">Instructivo para Limpieza y desinfeccion V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/instructivos/Estandar para prevencion de caidas ARL SURA.pdf" rel="nofollow">Estandar para prevencion de caidas ARL SURA</a></li>
                </ul>
                                        
                <h3>Otros Documentos</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/ESTILOS DE VIDA SALUDABLE.docx" rel="nofollow">Estilos de vida saludable</a></li>

                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Evaluación Inicial  SG-SST  2015.xls" rel="nofollow">Evaluación Inicial  SG-SST  2015</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Hoja de seguridad Hipoclorito de Sodio.docx" rel="nofollow">Hoja de seguridad Hipoclorito de Sodio</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Matriz de peligros y riesgos Dic 2021.xlsx" rel="nofollow">Matriz de peligros y riesgos (Diciembre)</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Matriz de EPPs V1.xlsx" rel="nofollow">Matriz de elementos de protección personal V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Matriz de indicadores SST IDM- Doc Ext ARL SURA.xls" rel="nofollow">Matriz de indicadores SST IDM- Doc Ext ARL SURA</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Matriz Legal SST 2021 - Diciembre.xls" rel="nofollow">Matriz Legal SST 2021 (Diciembre)</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Programa de Pausas Activas V1.pdf" rel="nofollow">Programa de Pausas Activas V1</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Reglamento de Higiene y seguridad V2.pdf" rel="nofollow">Reglamento de Higiene y seguridad V2</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Reglamento SST Contratistas.doc" rel="nofollow">Reglamento SST Contratistas</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de cuentas SST 2017.pptx" rel="nofollow">Rendicion de cuentas SST 2017</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de cuentas SST 2018.pptx" rel="nofollow">Rendicion de cuentas SST 2018</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de Cuentas SST 2019.ppt" rel="nofollow">Rendicion de cuentas SST 2019</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Rendicion de Cuentas SST 2020.pptx" rel="nofollow">Rendicion de cuentas SST 2020</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/otrosdocumentos/Roles y Responsabilidades SST.doc" rel="nofollow">Roles y Responsabilidades SST</a></li>
                </ul>            
                    
                <h3>Plan de Emergencias</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/Plan de Emergencias/Ruta de Evacuacion V3.pdf" rel="nofollow">Ruta de Evacuación IDM V3</a></li>
                
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/Plan de Emergencias/Plan de Emergencias V3.doc" rel="nofollow">Plan de emergencia V3</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/Plan de Emergencias/Plan de Emergencias V2 - Anexo matriz de vulnerabilidad.xls" rel="nofollow">Plan de emergencia V2 - Anexo</a></li>
                </ul>  

                <h3>PVE osteomuscular 2016-2017</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Análisis ausentismo 2016.xls" rel="nofollow">Análisis ausentismo 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Análisis demográfico 2016.xls" rel="nofollow">Análisis demográfico 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Cronograma de Actividades 2017.xls" rel="nofollow">Cronograma de Actividades 2017</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Diagnóstico de condiciones de salud y de trabajo 2016.pdf" rel="nofollow">Diagnóstico de condiciones de salud y de trabajo 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Diagnostico de Salud 2016.xlsx" rel="nofollow">Diagnostico de Salud 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Encuesta Riesgo Osteomuscular 2016.pdf" rel="nofollow">Encuesta Riesgo Osteomuscular 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Línea basal Riesgo Osteomuscular 2016.xlsx" rel="nofollow">Línea basal Riesgo Osteomuscular 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/Matriz Legal Riesgo Osteomuscular 2016.xlsx" rel="nofollow">Matriz Legal Riesgo Osteomuscular 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2016-2017/PVE Osteomuscular 2016-2017.pdf" rel="nofollow">PVE Osteomuscular 2016-2017</a></li>
                </ul>

                <h3>PVE Psicosocial 2016-2017</h3>
                <ul class="tmo_list">
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE Psicosocial 2016-2017/Analisis DxRP IDM 2016.pdf" rel="nofollow">Analisis DxRP IDM 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE Psicosocial 2016-2017/Consulta Sociodemografica DxRP IDM 2016.xlsm" rel="nofollow">Consulta Sociodemografica DxRP IDM 2016</a></li>
                <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE Psicosocial 2016-2017/Matriz de Resultados DxRP IDM 2016.xlsx" rel="nofollow">Matriz de Resultados DxRP IDM 2016</a></li>
                </ul>

                <h3>PVE osteomuscular 2018-2019</h3>
                <ul class="tmo_list">
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Analisis ausentismo 2018.xls" rel="nofollow">Analisis ausentismo 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Cronograma de Actividades 2019.xls" rel="nofollow">Cronograma de Actividades 2019</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Diagnostico de condiciones de salud y de trabajo 2018.pdf" rel="nofollow">Diagnostico de condiciones de salud y de trabajo 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Linea Basal Riesgo Osteomuscular 2018.xls" rel="nofollow">Linea Basal Riesgo Osteomuscular 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Matriz Legal Riesgo Osteomuscular 2018.xls" rel="nofollow">Matriz Legal Riesgo Osteomuscular 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/Perfil Sociodemografico 2018.xls" rel="nofollow">Perfil Sociodemografico 2018</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2018-2019/PVE Osteomuscular 2018-2019.doc" rel="nofollow">PVE Osteomuscular 2018-2019</a></li>
                </ul>

                <h3>PVE osteomuscular 2020-2021</h3>
                <ul class="tmo_list">
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2021/Diagnostico de condiciones de salud y trabajo 2020.pdf" rel="nofollow">Diagnostico de condiciones de salud y trabajo 2020</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2021/Matriz legal Riesgo Osteomuscular 2020.xls" rel="nofollow">Matriz legal Riesgo Osteomuscular 2020</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/PVE osteomuscular 2021/PVE Osteomuscular 20020 - 2021.pdf" rel="nofollow">PVE Osteomuscular 20020 - 2021</a></li>
                </ul>

                <h3>COVID-19</h3>
                <ul class="tmo_list">
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COVID19/Matriz Riesgo Covid 19 V1.xls" rel="nofollow">Matriz Riesgo Covid 19 V1</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COVID19/Induccion Protocolo Bioseguridad COVID 19.pdf" rel="nofollow">Induccion Protocolo Bioseguridad COVID 19</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COVID19/Protocolo Bioseguridad COVID 19 V3.doc" rel="nofollow">Protocolo Bioseguridad COVID 19 V3</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COVID19/RESOLUCION 062 covid 19.pdf" rel="nofollow">RESOLUCION 062 - 2020 covid 19</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COVID19/Res 018 marzo 2 de 2021 Modifica Res 062 de 2020.pdf" rel="nofollow">RESOLUCION 018 - 2021 covid 19</a></li>
                    <li><a href="https://www.idm.gov.co/web/index.php/nuevo-esquema/4-normatividad/4-4-resoluciones/download/314-2021/669-resolucion-065-del-08-de-junio-de-2021" rel="nofollow">RESOLUCION 065 - 2021 covid 19</a></li>
                </ul>

                <br><hr>

                <h3>COPASST | Comité de convivencia Laboral y brigada de emergencias | 2021</h3>
                <ul class="tmo_list">
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 1.pdf" rel="nofollow">Acta N° 1</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 2.pdf" rel="nofollow">Acta N° 2</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 3.pdf" rel="nofollow">Acta N° 3</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 4.pdf" rel="nofollow">Acta N° 4</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 5.pdf" rel="nofollow">Acta N° 5</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 6.pdf" rel="nofollow">Acta N° 6</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 7.pdf" rel="nofollow">Acta N° 7</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 8.pdf" rel="nofollow">Acta N° 8</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 9.pdf" rel="nofollow">Acta N° 9</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 10.pdf" rel="nofollow">Acta N° 10</a></li>
                    <li><a href="mapa_procesos/mapa/gestiondeltalentohumano/seguridadysaludeneltrabajo/COPASST - 2021/acta 11.pdf" rel="nofollow">Acta N° 11</a></li>
                </ul>

                <hr><br>

                <h3>Formulario Para Ausentismo Laboral</h3>
                <div id="qrcode">
                    <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fforms.gle%2FkP1wDFqAmS6B3HDQ7&s=6&e=m" alt="Generador de Códigos QR Codes"/>
                    <br/>
                </div>

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