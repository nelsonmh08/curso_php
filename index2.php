<?php
require  __DIR__.'/vendor/autoload.php';
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
//mysqli_close(conexion);
// These code snippets use an open-source library. http://unirest.io/php
//$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/addressList?address=Universidad+de+Panama",
  //array(
    //"X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    //"Accept" => "application/json"
  //)
//);
// These code snippets use an open-source library. http://unirest.io/php
//$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/routes?end=156+5th+Avenue%2C+New+York%2C+NY+10010&start=6+East+57th+Street%2C+New+York%2C+NY+10022",
  //array(
    //"X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    //"Accept" => "application/json"
  //)
//);
//echo  $response->raw_body;	
$response = Unirest\Request::get("https://montanaflynn-dictionary.p.mashape.com/define?word=work",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;	
?>
<html>
<form>
  <head>
    <title>LABORATORIO 4</title>
    </head>
<body>
<form name="input" action="index.php" method="POST">
  <hr width="80%" noshade size="12">
  <br>
<center>UNIVERSIDAD DE PANAMA <BR></center>
<center>FACULTAD DE INFORMÁTICA, ELECTRÓNICA Y COMUNICACIÓN<BR></center>
<center>LICENCIATURA EN COMERCIO ELECTRÓNICO<BR><BR></center>
<center>Formulario del Estudiante<BR></center>
  <hr width="80%" noshade size="12">
 <center><img src="fiec.jpg"> <center>
<TABLE align="center" border="1" bordercolor="black" width="800" cellspacing="0">
<TR>
<TD><br><center>
 Buscar la siguiente palabra :<br><br>
 Palabra:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nombre"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <center>
<br>
<center><input type="submit" value="Buscar"/> </center><br>
<center>Gracias por su tiempo <center>
<BR>
<marquee>Enviar la informacion al Centro de Estudiantes de la Facultad de Informática, Electrónica y Comunicacion. </marquee><br>
</td>
</tr>
</TABLE>
</body>
</form>
</html>