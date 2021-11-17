<?php
include ('../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!--logo de la pestaña -->
    <link rel="shortcut icon" href="assets/images//logo.png" />
   
    <!-- charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Periodo', 'Aprobadas', 'Rechazadas', { role: 'style' }],
          ['2014', 1000, 400, 'blue'],
          ['2015', 1170, 460, 'purple'],
          ['2016', 660, 1120, 'blue',]
          ['2017', 1030, 540, 'color: #e5e4e2']
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <!-- /charts -->



    <title>UTP-Proyecto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="assets/images/logo14.png" class="logo-brand" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Solicitudes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="solicitudesPendientes.php" id="pendienteSol">Pendientes</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="historialSolicitud.php" id="historialSol">Historial</a>
                        </div>
                </li>

                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../../salir.php" id="cerrarSesi">Cerrar sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="home">
            <div class="content-center">
                <img class="d-block w-100" src="assets/images/facha.jpg" alt="img" width="100px" height="250px">
                <h2 class="margintop-lg">Universidad Tecnológica de Panamá</h2>
                <p>Sitio de Solicitud de Apoyo Económico Estudiantil Cultural Académico para representacion Nacional e Internacional.</p>
                <br><br>
                <!-- <p>Portal de Evaluador</p> -->
            </div>
        </div>
    </section>

    <div class="principal">

        <section id="slider">
            <hr>
              <div class="row content-center">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/images/facha.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/images/facha2r.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/images/fachadar.jpg" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
        </section>

      <section id="comentarios">
        <hr>
          <h3 class="content-center">Comentarios
              <p> Algunos comentarios de las experiencias vividas por los estudiantes en diferentes eventos relacionados con la Universidad.
              </p>
          </h3>

          <div class="row">
          </div>
      </section>
      
      <section id="charts">
          <hr>
          <h3 class="content-center">Estadisticas
            <p> Estado actual de las solicitudes atendidas por la comision de 
              movilidad estudiantil.
            </p>
          </h3>

          <div class="row">

              <!-- column chart -->
              <!-- <div class="col-sm-6">
              <div class="card"> -->
                  <div class="card-body content-center">
                      <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                  </div>
            <!--  </div>
              </div> -->
              
          </div>            
      </section>
        
       
    </div> 
     <!-- end div principal -->

     <footer class="bgDark">
        <div class="container">
       
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="index.php">Home</a></li>
            </ul>
            <div class="container">
                <img src="assets/images/utpfooter.png"  alt="logo"  >&nbsp;&nbsp;
             
                <small>&nbsp;&nbsp;&nbsp;&nbsp;©2019 All Rights Reserved.</small>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>