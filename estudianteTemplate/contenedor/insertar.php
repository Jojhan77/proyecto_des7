<?php

include ('conexionEst.php');
include ('conexion.php');
include ('contador.php');

$cedula=$_POST['cedula'];
$email=$_POST['email'];
$contraseña=$_POST['contra'];
//$pass = md5($contraseña);
$telefono = $_POST['telefono'];
$tipo = 1;




$consulta = mysqli_query($conexionEst, "SELECT cedula FROM estudiantes WHERE cedula = '".$cedula."'");

if ( mysqli_num_rows($consulta) == 1)
{
    $consulta2 =("SELECT cedula, nombre, apellido FROM estudiantes where cedula = '".$cedula."'");
    $result = mysqli_query($conexionEst,$consulta2);

    while($mostrar=mysqli_fetch_array($result)){
        $ced = $mostrar['cedula'];
        $nom = $mostrar['nombre'];
        $apel = $mostrar['apellido'];

    }

    $insertar = $conexionEst->prepare("INSERT INTO usuario (cedula, email, nombre, apellido, contra,telefono, tipo) VALUES ('".$ced."','".$email."','".$nom."','".$apel."','".$contraseña."','".$telefono."','".$tipo."')");
    $insertar->execute();

    header('Location: ../index.php');

}
else{
    header('Location: ../indexX.php');
    echo "ERROR";
}

?>
