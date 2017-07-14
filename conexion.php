<?php  
/*include("config.php"); si no encuentra algo, lo sigue ejecutando*/
require_once "config.php";

function conexionMySQL()
{
	/*echo "por favor no usen echo's para imprimir en pantalla";*/
	$conexion = new mysqli(SERVER, USER, PASS, BD);
	if ($conexion->connect_error) 
	{
	 	$error.="div class 'error'>Error de conexión No <b>%d</b> Mensaje del error:<mark>%s</mark></div>";
	 	printf($error, $conexion->conect_errno,$conexion->connect_error);
	 	die($conexion);
	} 

	return $conexion;
}
/*conexionMySQL();*/
?>