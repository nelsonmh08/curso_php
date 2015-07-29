<?php
	echo"CONEXION A LA BASE DE DATOS DEMO";
	$URL="sql5.freemysqlhosting.net";
	$database="sql585296";
	$usuario="sql585296";
	$password="yX9!zJ5%";
	$port=3306;
	// CREAR CONNECCION 
	$conexion=mysqli_connect($URL,$usuario,$password,$database,$port);
	if(!$conexion) { die ("FINALIZO LA CONEXION");
}
echo "CONEXION EXITOSA";
$query= "select * from demo";
$result= mysqli_query($conexion,$query);
while ($row=mysqli_fetch_assoc($result)){
	echo $row['id']. " ".$row['nombre']." ".$row['descripcion'];
}
mysqli_close(conexion);
?>