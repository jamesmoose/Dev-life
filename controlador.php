<?php 
require "most.php";
require "modelo.php";
/*
Aplicación CreateReadUpdateDelete
PHP tiene 2 métodos de envío de datos: POST y GET

Create   Afecta a la BD     INSERT (SQL) POST    Modelo
Read     No afecta a la BD  SELECT (SQL) POST    Vista
Update   Afecta a la BD     UPDATE (SQL) GET     Modelo
Delete   Afecta a la BD     DELETE (SQL) POST    Modelo
*/

$transaccion = $_POST["transaccion"];

function ejecutarTransaccion($transaccion)
{
	if($transaccion=="alta")
	{
		// Mostrar el formulario de alta
		altaHeroe();
	}
}

ejecutarTransaccion($transaccion);

?>