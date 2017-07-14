<?php 
require_once "conexion.php";

function insertarHeroe($nombre,$imagen,$descripcion,$editorial)
{
	$sql = "INSERT INTO heroes(id_heroe,nombre,imagen,descripcion,editorial) VALUES (0,'$nombre', '$imagen', '$descripcion', $editorial)";
	$mysql = conexionMySQL();

	if ($resultado = $mysql->query($sql)) 
	{
		$respuesta = "<div class 'exito' data-recargar>Se insertó con éxito el registro del Super héroe: <b>$nombre</b></div>";
	} 
	else 
	{
		$respuesta = "<div class 'error'>Ocurrió un error NO se insertó el registro del Super héroe: <b>$nombre</b></div>";
	}
	$mysql->close();

	return printf($respuesta);
}

function eliminarHeroe($id)
{
	$sql = "DELETE FROM heroes WHERE id_heroe=$id";
	$mysql = conexionMySQL();

	if ($resultado = $mysql->query($sql)) 
	{
		$respuesta = "<div class 'exito' data-recargar>Se eliminó con éxito el registro del Súper Héroe con id: <b>$id</b></div>";
	} 
	else 
	{
		$respuesta = "<div class 'error'>Ocurrió un error NO se eliminó con éxito el registro del Súper Héroe con id: <b>$id</b></div>";
	}
	$mysql->close();

	return printf($respuesta);
}

function actualizarHeroe($id_heroe,$nombre,$imagen,$descripcion,$editorial)
{
	$sql = "UPDATE heroes SET nombre='$nombre', imagen='$imagen',descripcion='$descripcion',editorial= $editorial WHERE id_heroe=$id_heroe";
	$mysql = conexionMySQL();

	if ($resultado = $mysql->query($sql)) 
	{
		$respuesta = "<div class 'exito' data-recargar>Se actualizó con éxito el registro del Super héroe: <b>$nombre</b></div>";
	} 
	else 
	{
		$respuesta = "<div class 'error'>Ocurrió un error NO se actualizó el registro del Super héroe: <b>$nombre</b></div>";
	}
	$mysql->close();

	return printf($respuesta);
}
?>