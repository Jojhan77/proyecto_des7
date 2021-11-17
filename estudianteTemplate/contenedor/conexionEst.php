<?php 
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bdfinal";

$conexionEst =mysqli_connect($host,$usuario,$clave,$bd);


if ($conexionEst) {

	echo "Conectado correctamente";
}else {
	
	echo "ERROR AL CONECTAR";
}

 ?>