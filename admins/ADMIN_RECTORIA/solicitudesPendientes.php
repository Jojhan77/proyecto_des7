<?php
include ('../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion, "SELECT idSolicitud, nombre, cedula, nombreEvento,  unidadAcademica,fechaInicial, fechaFinal FROM solicitud WHERE  solicitud = '1' AND rev_secretaria = '1'");
while($bruh = mysqli_fetch_array($consulta)){
    $idSol = $bruh['idSolicitud'];
    $nombre = $bruh['nombre'];
    $cedula = $bruh['cedula'];
    $nombreEvento = $bruh['nombreEvento'];
    $unidad = $bruh['unidadAcademica'];
    $fechaini = $bruh['fechaInicial'];
    $fechafin = $bruh['fechaFinal'];
}

if(mysqli_num_rows($consulta)<= 0){
    $idSol = '';
    $nombre = '';
    $cedula = '';
    $nombreEvento = '';
    $unidad = '';
    $fechaini = '';
    $fechafin = '';
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="author" content="Diego Velázquez">
    <meta name="description" content="Smart Agency is a one page responsive Bootstrap 4 template. This is a free open source theme, you can use our theme for any purpose, even commercially. Create amazing websites with this easy to customize template."> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/formulario.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!--logo de la pestaña -->
    <link rel="shortcut icon" href="assets/images//logo.png" />

    <title>UTP-Proyecto</title>
</head>
<style type="text/css"> 
    table,th,td{
        border:1px solid purple;
        border-collapse: collapse;
               }

    th,td{
        padding: 15px;
        font-size:small;
         }       
</style>
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
                             
                                <section id="fomulario">
            <duv class="container">
                    <div class="content-center">
                        <h2 class="margintop-lg">Solicitudes Pendientes</h2>
                    </div>
                </duv>
                <form class="formFinal" name="formFinal" action="" method="post">
                        <fieldset class="step">
                            <div class="card" style="width: 45rem;">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $idSol ," ", $nombreEvento ," ";?><br/></h5>
                            <h6 class="card-subtitle mb-2 text-muted">archivo pendiente</h6>
                            <p class="card-text">Enviado por <?php echo $nombre," ", $cedula," ";?><br/></p>
                            <a href="verSolPendiente.php" class="card-link">ver mas</a>
                            </div>
                            </div>
                            <br>

                         
                        </fieldset>
                    </form>
    </section>

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