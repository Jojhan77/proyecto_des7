<?php
include ('../../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consult= mysqli_query($conexion,"SELECT cedula FROM usuario WHERE email = '".$user."' ");

while($bruh = mysqli_fetch_array($consult)){
    $ced = $bruh['cedula'];
}

$consulta = mysqli_query($conexion,"SELECT nombre, apellido FROM usuario WHERE cedula = '".$ced."'");
while($bruh = mysqli_fetch_array($consulta)){
  $nombre = $bruh ['nombre'];
  $apellido = $bruh ['apellido'];

}

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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/formulario.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!--logo de la pestaña -->
    <link rel="shortcut icon" href="../assets/images//logo.png" />
   
    <!-- charts -->

    



    <title>UTP-Proyecto</title>
</head>

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
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Solicitudes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="nuevaSolicitud.php" id="nuevaSol">Nueva Solicitud</a>
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
                        <a class="dropdown-item" href="salir.php" id="cerrarSesi">Cerrar sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="principal">
    <section id="hero">
        <div class="home">
            <div class="content-center">
                <img class="d-block w-100" src="../assets/images/facha.jpg" alt="img" width="100px" height="250px">
                <h2 class="margintop-lg">Universidad Tecnológica de Panamá</h2>

                <p>Sitio de Solicitud de Apoyo Económico Estudiantil Cultural Académico para representacion Nacional e Internacional.</p>
                <br><br>
                <h2 class="margintop-lg">Portal de Estudiantes</h2>
                <h2 class="margintop-lg">Bienvenido <?php echo $nombre;?> <?php echo $apellido;?> </h2>
         
            </div>
        </div>
    </section>

    
    
      <hr>
      <!-- section faqs -->
      <section id="faqs">
          
          <h3 class="content-center">Preguntas Frecuentes
            <p> Compilación de preguntas frequentes acerca de la plataforma.</p> 
          </h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">¿Cuantas solicitudes puedo realizar en el semestre?</h5>
                    <p class="card-text">Cada solicitud debe ser hecha con al menos dos meses antes de la fecha del evento
                      , no hay limite de la cantidad de solicitudes que puedes hacer, siempre y cuando no tengas niguna solicitud en estado pendiente. 
                    </p>
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">¿Como sabré quien está revisando mi solicitud?</h5>
                    <p class="card-text">Contamos con una Barra de progreso en la cuál podrás observar el avance de tu solicitud, 
                      quién la está revisando y los distintos feedback para que tu solicitud esté en orden, 
                      ellos se encargaran de aprobar y/o rechazar la solicitud.</p> 
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">¿Cuantas personas pueden ir a una representación?</h5>
                    <p class="card-text">No existe un límite de acompañantes para alguna representación,  
                      aunque la universidad dará los parámetros en caso de que no se cuente con los suficientes fondos 
                      para todo el grupo.</p>
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">¿Quienes son los encargados de revisar mi solicitud?</h5>
                    <p class="card-text">La secretaría de vida estudiantil, El comité evaluador, Rectoría.</p>
                    
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">¿De que año debo ser para realizar una solicitud?</h5>
                    <p class="card-text">Tu nivel académico no importa al momento de aplicar a una 
                      solicitud pero necesitas un índice mínimo de 1.50.</p>
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">¿La universidad me cobrará algo? </h5>
                    <p class="card-text">La universidad no te cobrará nada si se te aprueba una solicitud, esto es parte de tu vida universitaria.</p>
                    
                  </div>
                </div>
              </div>
            </div>
            
      </section>
      
        
       
    </div> 
     <!-- end div principal -->

    <footer class="bgDark">
        <div class="container">
       
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#hero">Home</a></li>
                <li class="list-inline-item footer-menu"><a href="#faqs">Faqs</a></li>
                
            </ul>
            <div class="container">
                <img src="../assets/images/utpfooter.png"  alt="logo"  >&nbsp;&nbsp;
             
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