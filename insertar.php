<?php
 include ('estudianteTemplate/contenedor/conexion.php');
 session_start();


        $cedula=$_POST['cedula'];
        $email=$_POST['email'];
        $nom=$_POST['nom'];
        $apel=$_POST['apel'];
        $contraseña=$_POST['contra'];
        $recontra=$_POST['recontra'];
        $telefono = $_POST['telefono'];
        $tipo = 1;

        if($recontra == $contraseña){
            $contraseña_fuerte = password_hash($contraseña, PASSWORD_DEFAULT);  
            $consulta = mysqli_query($conexion, "SELECT cedula FROM usuario WHERE cedula = '".$cedula."'");

            if ( mysqli_num_rows($consulta) == 0 )
            {
    
                $insertar = mysqli_query ($conexion, "INSERT INTO usuario (cedula, email, nombre, apellido, contra, telefono, tipo) VALUES ('".$cedula."','".$email."','".$nom."','".$apel."','".$contraseña_fuerte."','".$telefono."','".$tipo."')");
           
                echo "<script>alert('Usuario: $nom registrado');window.location='registrarse.php'</script>";
               
               
            }else if ( mysqli_num_rows($consulta) == 1 ){
                echo "<script>alert('La cedula: $cedula se encuentra registrada');window.location='registrarse.php'</script>";
                }

        }else{
            echo "<script>alert('La contrasenas no coinciden');window.location='registrarse.php'</script>";
        }




       

       
       

?>
