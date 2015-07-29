<?php
	echo"CONEXION A LA BASE DE DATOS DEMO";
	$URL="sql5.freemysqlhosting.net";
	$database="sql585296";
	$usuario="sql585296";
	$password="yX9!zJ5%";
	$port="3306";
	// CREAR CONNECCION 
	$conexio=mysql_connect($URL,$usuario,$password,$database,$port);
	if(!$conexion) { die ("FINALIZO LA CONEXION");
}
echo "CONEXION EXITOSA";
?>