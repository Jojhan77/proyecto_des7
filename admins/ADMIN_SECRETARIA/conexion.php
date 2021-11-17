<?php 
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bdfinal";

$conexion =mysqli_connect($host,$usuario,$clave,$bd);


if ($conexion) {

//	echo "Conectado correctamente";
}else {
	
	echo "ERROR AL CONECTAR";
}

 ?>