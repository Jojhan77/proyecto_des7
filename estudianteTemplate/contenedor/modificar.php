<?php

include ('conexion.php');
include ('../../validar.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion,"SELECT nombre, apellido, email, contra FROM usuario WHERE email = '".$user."'");

while($bruh = mysqli_fetch_array($consulta)){
    $nombre = $bruh ['nombre'];
    $apellido = $bruh ['apellido'];
    $contra = $bruh ['contra'];
    $email = $bruh ['email'];
}

$contraseña = $_POST['contra'];
$contraNueva = $_POST['contraNueva'];
$email = $_POST['email'];
$emailNuevo = $_POST['emailNuevo'];

if($_POST['contra']==''){
    $password = $contra;
}else{
    //usar sha1 para encriptar
    $password = $_POST['contra'];
}

if($_POST['email']==$user ){
    $correo = $email;
}else if($_POST['email']==''){
    $correo=$user;
}else{
    $correo = $_POST['email'];
    $_SESSION['user']=$correo;
}


$consulta= mysqli_query($conexion,"SELECT cedula FROM usuario WHERE email = '".$user."' ");

while($bruh = mysqli_fetch_array($consulta)){
    $ced = $bruh['cedula'];
}

$consulta2 = mysqli_query($conexion,"UPDATE usuario SET contra = '".$password."' WHERE cedula ='".$ced."'");
$consulta3 = mysqli_query($conexion,"UPDATE usuario SET email = '".$correo."' WHERE cedula ='".$ced."'");

echo "DATOS ACTUALIZADOS";
header ('Location: perfil.php');

/*$consulta= mysqli_query($conexion,"SELECT contra FROM usuario WHERE contra = '".$contraseña."'");
$consulta2 = mysqli_query($conexion,"SELECT cedula FROM usuario WHERE email = '".$email"' ");

while($bruh = mysqli_fetch_array($consulta2)){
    $ced = $bruh['cedula'];
}

if(mysqli_num_rows($consulta) == 1){
    $consulta2 = mysqli_query($conexion,"UPDATE usuario SET contra = '".$contraNueva."' WHERE cedula ='".$ced."'");

    
    }
    echo "DATOS ACTUALIZADOS";
    header ('Location: perfil.php'); 
}*/


?>