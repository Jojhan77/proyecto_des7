<?php
include ('conexion.php');
include ('../../validar.php');
$user = $_SESSION['user'];

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$unidadaca = $_POST['unidadaca'];
$nombreeve = $_POST['nombreeve'];
$fechaini = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];
$comentarios =$_POST['comentarios'];
$tipoeve = $_POST['tipoeve'];
$lugarEvento = $_POST['lugarEvento'];
$montoInscripcion = $_POST['montoInscripcion']; 
$montoGastoViaje = $_POST['montoGastoViaje'];
$montoApoyoEco = $_POST['montoApoyoEcono'];
if($_POST['apoyoEspecial'] != ""){
    foreach ($_POST['apoyoEspecial'] as $apoyoEspecial){
        $sql=mysqli_query($conexion, "INSERT INTO ch (apoyoEspecial, nombreEvento) values('".$apoyoEspecial."', '".$nombreeve."' )");
    }
    }

if($_POST['apoyoEspecial'] != ""){
        foreach ($_POST['apoyo'] as $apoyoEspecial){
            $sql=mysqli_query($conexion, "INSERT INTO ch (apoyo, nombreEvento) values('".$apoyo."', '".$nombreeve."' )");
        }
        }

$insertar= mysqli_query($conexion, "INSERT INTO solicitud (nombre, cedula,correo, unidadAcademica,participantes, nombreEvento, estado,fechaInicial, fechaFinal, comentarios,lugarEvento,montoInscripcion,montoGastoViaje,montoApoyoEco, solicitud) VALUES ('".$nombre."', '".$cedula."','".$user."' ,'".$unidadaca."','".$participantes."','".$nombreeve."','pendiente','".$fechaini."','".$fechafin."','".$comentarios."','".$lugarEvento."','".$montoInscripcion."','".$montoGastoViaje."','".$montoGastoViaje."', '1')");
$consulta = mysqli_query($conexion, "SELECT idSolicitud FROM solicitud WHERE cedula = '".$cedula."'");





echo "<script>alert('Su solicitud $nombreeve a sido procesada, puedes verificar en el apartado de Pendientes cual es el estado.');window.location='home.php'</script>";
?>