<?php
 include ('estudianteTemplate/contenedor/conexion.php');

  session_start();
  $user = $_POST['user'];
  $contraseña = $_POST['contraseña'];
  

   $consulta = mysqli_query($conexion, "SELECT email, contra FROM usuario WHERE email = '".$user."' ");
   $col = mysqli_num_rows($consulta);
   $dato = mysqli_fetch_array($consulta);


  //validacion de que los datos esten correctos y coincidan con los de la BD

  $sulta = mysqli_query($conexion, "SELECT tipo From usuario WHERE email = '".$user."'");
  while($bruh = mysqli_fetch_array($sulta)){
    $tipo = $bruh['tipo'];

}
    if ($tipo != 1){
        $consulta = mysqli_query($conexion, "SELECT email, contra FROM usuario WHERE email = '".$user."' AND contra = '".$contraseña."'");
        $_SESSION['user']=$user;
    }
    else if (( $col == 1) && (password_verify($contraseña,$dato['contra']) && ($tipo == 1)))
     {
          $_SESSION['user']=$user;         
         
     }
     else{
        echo "<script>alert('Correo o contrasena incorrectas, vuelva a intentarlo.');window.location='../../index.php'</script>";
       
     }

     switch($tipo)
     {
       case 1: 
           {
               header('Location: estudianteTemplate/contenedor/home.php');
               break;
           }
       case 2:
           {
               header('Location: admins/ADMIN_SECRETARIA/index.php');
               break;
           }
       case 3:
           {
               header('Location: admins/ADMIN_COMITE/index.php');
               break;
           }
       case 4:
           {
               header('Location: admins/ADMIN_RECTORIA/index.php');
               break;
           }        
     }
?>