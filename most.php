<?php
require_once "conexion.php";
function mostrar(){
	$mysql = conexionMySQL();
	$sql = "SELECT * FROM pacientes ORDER BY id_paciente DESC";
	if ($resultado = $mysql->query($sql)) 
	{
		if (mysqli_num_rows($resultado) == 0) 
		{
			$respuesta = "<div class='error'> Error: No existen datos de super héroes, la Base de Datos está vacía</div>";		
		} 
		else 
		{
			$respuesta = "<div > Ahora se visualizará la información</div>";
			$tabla = "<table id='tabla-pacientes' class='tablaloca' style=' background-color: #7E9ECC; color: white;'>";
			while($fila = $resultado->fetch_assoc())
			{  
				$tabla .="<tr>";
					$tabla.="<td><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'> ".$fila["nombre"]." </td>";
				$tabla .="</tr>";
			}
			$resultado->free();
			$tabla.= "</table>";
			$respuesta = $tabla;
		}
	} 
	else 
	{
		$respuesta = "<div class='error'> Error: No se ejecutó la consulta a la Base de Datos </div>";
	}
	$mysql->close();

	return printf($respuesta);
}
function mostrar2(){
	$mysql = conexionMySQL();
	$sql = "SELECT * FROM equipo ORDER BY id_instrumento DESC";
	if ($resultado = $mysql->query($sql)) 
	{
		if (mysqli_num_rows($resultado) == 0) 
		{
			$respuesta = "<div class='error'> Error: No existen datos de super héroes, la Base de Datos está vacía</div>";		
		} 
		else 
		{
			$respuesta = "<div > Ahora se visualizará la información</div>";

			$tabla = "<table id='tabla-ins' class='tablaloca2' style=' background-color: #7E9ECC; color: white;'>";
			while($fila = $resultado->fetch_assoc())
			{  
				$tabla .="<tr>";
					$tabla.="<td><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'> ".$fila["nombreX"]." </td>";
					$tabla.="<td><img src='img/../toco/".$fila["imagenX"]."'  style='width: 250px; height: 100px;' /></td>";
				$tabla .="</tr>";
			}
			$resultado->free();
			$tabla.= "</table>";
			$respuesta = $tabla;
		}
	} 
	else 
	{
		$respuesta = "<div class='error'> Error: No se ejecutó la consulta a la Base de Datos </div>";
	}
	$mysql->close();

	return printf($respuesta);
}
?>