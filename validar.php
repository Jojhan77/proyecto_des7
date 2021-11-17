<?php 
    session_start();

    if(!isset($_SESSION["user"])){
        echo "<script>alert('Inicia sesion para poder acceder al sitio, o registrate en caso que no lo estes.');window.location='../../index.php'</script>";
    }

?>