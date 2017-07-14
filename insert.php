<?php
require_once "conexion.php";

$nombre=$_POST["nom"];
$numseguro=$_POST["num"];
$docres=$_POST["dr"];
$enfres=$_POST["enf"];
$sexx=$_POST["sex"];
$motivo=$_POST["mot"];
$fecha=$_POST["fecha"];
$sql = "INSERT INTO pacientes(nombre,numseguro,docres,enfres,sexx,motivo,fecha) VALUES ('$nombre','$numseguro','$docres','$enfres','$sexx','$motivo','$fecha')";
	$mysql = conexionMySQL();

	if ($resultado = $mysql->query($sql)) 
	{
		$respuesta = "<script>alert('nuevo registro')</script>";
	} 
	else 
	{
		$respuesta = "<script>alert('ingreso fallido')</script>";
	}
	$mysql->close();
	return $respuesta;
?>