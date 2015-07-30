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
$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/addressList?address=Universidad+de+Panama",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
// These code snippets use an open-source library. http://unirest.io/php
$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/routes?end=156+5th+Avenue%2C+New+York%2C+NY+10010&start=6+East+57th+Street%2C+New+York%2C+NY+10022",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;	
$response = Unirest\Request::get("https://montanaflynn-dictionary.p.mashape.com/define?word=work",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;	
?>
