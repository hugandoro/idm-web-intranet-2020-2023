<?php
require_once('connections/sle.php');
header('Content-Type: text/html; charset=UTF-8');
//error_reporting(0);
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

<body style="background-color:#ffffff;">
  <div class="container">
    <!-- Barra de navegacion superior -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="../index.php"><img src="../img/logo_idm.png" width="100" height="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">De interes general |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index_mapa.php">Sistema de Calidad |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../memoria_institucional.php">Memoria institucional y del conocimiento |</a>
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
        <div style="font-size: 18pt">IDM | Muro de comentarios</div>
      </div>
    </div>

    <hr>
    <?php
    mysqli_query($sle, "SET NAMES 'utf8'");
    mysqli_select_db($sle, $database_sle);
    $sql = "SELECT * FROM directorio";
    $resultado = mysqli_query($sle, $sql);
    ?>

    <?php 
    if ( (isset($_POST['id_funcionario']))) { 
      $id_funcionario = $_POST['id_funcionario'];
      $mensaje = $_POST['mensaje'];
      if ($mensaje != ''){
        $sql_comentarios = "INSERT INTO muro_comentarios (id_funcionario, comentario) VALUES ('$id_funcionario', '$mensaje')";
        $resultado_insertar = mysqli_query($sle, $sql_comentarios);
      }
    }
    ?>

    <div class="row">
      <div class="col-md-12">
        <center>
          <table class="table table-striped">
            <thead>
              <tr>
                <th><B>Compañer@</B></th>
                <th><B>Dependencia</B></th>
                <th><B>Comentarios</B></th>
                <th><B></B></th>
              </tr>
            </thead>

            <tbody>
              <?php
              while ($row = mysqli_fetch_row($resultado)) {
                echo "<tr>";
                echo "<td>$row[0] $row[1]</td> \n";
                echo "<td>$row[8]</td> \n";

                echo "<form name='form1' method='post' action='index.php'>
                      <td>
                        <input name='id_funcionario' type='text' id='id_funcionario' value=$row[11] hidden />
                        <input name='mensaje' type='text' id='mensaje' minlength='10' maxlength='50' size='40' placeholder='Deja un mensaje maximo de 50 caracteres' 'required />
                        <input name='button' class='btn btn-success' type='submit' id='button' value='Enviar...' />
                      </td>
                      </form>";
                echo "</tr>";

                $sql = "SELECT * FROM muro_comentarios WHERE id_funcionario = $row[11]";
                $comentarios = mysqli_query($sle, $sql);
                while ($row_comentarios = mysqli_fetch_row($comentarios)) {
                  echo "<tr>";
                  echo "<td></td> \n";
                  echo "<td></td> \n";
                  echo "<td><span class='badge badge-pill badge-info'>$row_comentarios[2]</span></td> \n";
                  echo "</tr>";
                }

              }
              ?>
            </tbody>
          </table>
        </center>
      </div>
    </div>


    <!-- Pie de pagina -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <center><img class="mb-2" src="../img/logo_idm.png" alt="" width="100%">
            <small class="d-block mb-3 text-muted">Instituo de Desarrollo Municipal</small>
            <small class="d-block mb-3 text-muted">&copy; 2020-2023</small>
          </center>
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