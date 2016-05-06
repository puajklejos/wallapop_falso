<?php
	
	/*Conexion a la base de datos*/
	function getDB()
	{
		$usuario = "wallapop";
		$contraseña = "1234";
		$mbd = new PDO('mysql:host=localhost;dbname=wallapop', $usuario, $contraseña);
		return $mbd;
	}

?>