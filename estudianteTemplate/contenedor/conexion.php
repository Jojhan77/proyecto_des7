<?php 
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bdfinal";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);


if ($conexion) {

}else {
	
	echo "ERROR AL CONECTAR";
}

 ?>