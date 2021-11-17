<?php
include ('../../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion,"SELECT * FROM solicitud WHERE correo = '".$user."'");

while($bruh = mysqli_fetch_array($consulta)){
    $cedula = $bruh['cedula'];
}



?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/formulario.css">

 
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">


    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">


    <link rel="shortcut icon" href="../assets/images//logo.png" />

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
            <img src="../assets/images/logo14.png" class="logo-brand" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Solicitudes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="nuevaSolicitud.php" id="nuevaSol">Nueva Solicitud</a>
                        <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="tracker.php" id="pendienteSol">Pendientes</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="historialSolicitud.php" id="historialSol">Historial</a>
                        </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="perfil.php" id="perfilSesi">Mi Perfil</a>
                        <div class="dropdown-divider"></div>
                     
                        <a class="dropdown-item" href="../../salir.php" id="cerrarSesi">Cerrar sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="solicitudes">
        <div class="container">
            <div class="content-center">
            </br>
            </br>
            </br>
                <h2 class="margintop-lg">Historial de Solicitudes</h2>
            </div>
            <form class="formFinal" name="formFinal" action="buscarEstudiante.php" method="post">
                <div class="row">
                    <div class="col-sm-14 col-sm-offset-5 col-md-12 col-md-offset-6">
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Consultar</h4>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                               
                                <input id="cedula" name="cedula" value="<?php echo $cedula;?>" type="text" class="form-control input-sm" readonly>
                            </div>
                            <div class="form-group">
                                <div class="submit">
                                    <button id="registerButton" type="submit">Consultar</button>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
        

            </br>
            </br>
            </br>
            </br>
           
            

    <footer class="bgDark">
        <div class="container">
       
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="home.php">Home</a></li>
                <li class="list-inline-item footer-menu"><a href="home.php#faqs">Faqs</a></li>
                
            </ul>
            <div class="container">
                <img src="../assets/images/utpfooter.png"  alt="logo"  >&nbsp;&nbsp;
             
                <small>&nbsp;&nbsp;&nbsp;&nbsp;©2019 All Rights Reserved.</small>
            </div>
        </div>
        </footer>

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
