<?php
include ('../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion, "SELECT * FROM solicitud WHERE  solicitud = '1' AND checkeado = 'secretaria'");
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
    $idSol = "Sin solicitud";
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
                        <a class="dropdown-item" href="#" id="cerrarSesi">Cerrar sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="fomulario">
            <duv class="container">
                    <div class="content-center">
                        <h2 class="margintop-lg">Aprobación de Solicitud</h2>
                    </div>
                </duv>
                <form class="formFinal" name="formFinal" action="" method="post">
                        <fieldset class="step">	
								<legend>INFORMACIÓN DE LOS ESTUDIANTES:</legend>
                            <p>
                                <label for="nombre">NOMBRE: </label><br>
                                <input id="nombre" name="nombre" placeholder=<?php echo $nombre;?> disabled/>
                            </p>
                            <p>
                                <label for="cedula">CÉDULA: </label><br>
                                <input id="cedula" name="cedula" placeholder=<?php echo $cedula;?> type="text"  disabled />
                            </p>
                            <p>
                                <label for="unidadaca">UNIDAD ACADÉMICA: </label><br>
                                <input id="unidadaca" name="unidad" type="text" placeholder=<?php echo $unidad;?> disabled />
                            </p>
                        </fieldset>


                        <fieldset class="step">
                            <legend>Datos sobre el Evento</legend>
                            <p>
                                <label for="nombreeve">NOMBRE DEL EVENTO: </label><br>
                                <input id="nombreeve" name="nombreeve" type="text" placeholder=<?php echo $nombreEvento;?> disabled />
                            </p>
                            <p>
                                <label for="fecha">FECHA INICIAL DEL EVENTO: </label><br>
                                <input id="fecha" name="fechaini" type="text" placeholder=<?php echo $fechaini?> disabled />
                            </p>
                            <p>
                                <label for="fecha">FECHA FINAL DEL EVENTO: </label><br>
                                <input id="fecha2" name="fechafin" type="text" placeholder=<?php echo $fechafin?> disabled />
                            </p>
                            <p>
                                <label for="justi">JUSTIFICACIÓN Y BENEFICIOS DE LA PARTICIPACIÓN: </label>
                                <textarea name="comentarios" rows="2" cols="30" disabled>La participación en el evento tendrá como beneficio un reconocimiento a la universidad a nivel internacional en caso de que el estudiantes quede entre los primeros 10 puestos.</textarea>
                            </p>
                           
                        </fieldset>
                        <fieldset class="step">
                            <legend>TIPO DE EVENTO</legend>
                            <p>
                                <label for="tipoeve">Tipo de Evento</label><br>
                                <select id="tipoeve" name="tipoeve" disabled>
                                    <option>CULTURAL</option>
                                    <option selected>DEPORTIVO</option>
                                 </select>
                            </p>
                            <p>
                                <label for="alcenceeve">Alcance del Evento</label><br>
                                <select id="alcenceeve" name="alcenceeve" disabled>
                                    <option>NACIONAL</option>
                                    <option selected>INTERNACIONAL</option>
                                 </select>
                            </p>
                            <p>
                                <label for="dirrecion">Especifique Lugar</label><br>                               
                                <input id="dirrecion" name="dirrecion" type="text" placeholder="Estadio Azteca, Ciudad de México, México" disabled />
                            </p>
                             <p>APOYO OFRECIDO POR ORGANIZADORES O PATROCINADORES DEL EVENTO:<br><br>
                            <input type="checkbox" name="INSCRIPCION" style="  width: 50px;" disabled>INSCRIPCIÓN <br>
                       		<input type="checkbox" name="HOSPEDAJE"style="  width: 50px;" checked disabled>HOSPEDAJE  <br>
                    		<input type="checkbox" name="MANUTENCION"style="  width: 50px;" checked disabled>MANUTENCIÓN <br>
               				<input type="checkbox" name="GASTOSDEVIAJE"style="  width: 50px;" disabled>GASTOS DE VIAJE<br>
                            <input type="checkbox" name="APOYOECONOMICOPARCIAL"style="  width: 50px;" disabled>APOYO ECONÓMICO PARCIAL</p>

                        </fieldset>
                        <fieldset class="step">
                            <legend>TIPO DE APOYO</legend>
                        
                            <p>
                                APOYO SOLICITADO A UTP:  <br><br>
                                <input type="checkbox" name="INSCRIPCION2" style="  width: 50px;" checked disabled>INSCRIPCIÓN <br> 
                                <input type="checkbox" name="GASTOSDEVIAJE2"style="  width: 50px;" checked disabled>GASTOS DE VIAJE<br>
                                <input type="checkbox" name="APOYOECONOMICO"style="  width: 50px;" disabled >APOYO ECONÓMICO <br>
                            </p>
                            
                               <p>
                                MONTO DE INSCRIPCIÓN: <br>
                                <input id="nombreeve" name="nombreeve" type="text" style="   width: 112px;" disabled placeholder="B/.30.00"/><br>	
                                 MONTO DE GASTOS DE VIAJE: <br>
                                 <input id="fecha" name="fechaini" type="text" style="   width: 112px;" disabled placeholder="B/.700.00"/><br>
                                 MONTO DE APOYO ECONÓMICO: <br>
                                     <input id="fecha" name="fechaini" type="text"style="    width: 112px;" disabled />
                               </p>

                               
						
                        </fieldset>
						<fieldset class="step">
                            <legend>Aprobación o Rechazo de Solicitud</legend>
							<p>
                                <button><a class="enlace" <?php $update = mysqli_query($conexion,"UPDATE solicitud SET rev_rector = '1', checkeado ='aprobado', estado = 'finalizado' WHERE idSolicitud = '".$idSol."'");?>href='#'> Aprobar </a>
                            </button>
                                
                            </p>
                            <br>
                            <p class="submit">
                                <button><a class="enlace" <?php $updatee = mysqli_query($conexion,"UPDATE solicitud SET rev_rector = '1', checkeado ='rechazado', estado = 'finalizado' WHERE idSolicitud = '".$idSol."'");?>href='solicitudesPendientes.php'>Rechazar</a></button>
                            </p>
                            <br>
                            <p class="submit">
                        <button><a class="enlace" href="solicitudesPendientes.php">Volver</a></button>
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