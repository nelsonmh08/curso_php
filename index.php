<?php
require  __DIR__.'/vendor/autoload.php';
	echo"CONEXION A LA BASE DE DATOS DEMO";
	$URL="sql5.freemysqlhosting.net";
	$database="sql585296";
	$usuario="sql585296";
	$password="yX9!zJ5%";
	$port=3306;
	$conexion=mysqli_connect($URL,$usuario,$password,$database,$port);
	if(!$conexion) { die ("FINALIZO LA CONEXION");
}
echo "CONEXION EXITOSA";
$query= "select * from demo";
$result= mysqli_query($conexion,$query);
while ($row=mysqli_fetch_assoc($result)){
	echo $row['id']. " ".$row['nombre']." ".$row['descripcion'];
}
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
 <div class="input-group">
   <span class="input-group-btn">
    <input type="submit" type="button">IR!</button>
    </span>
    <input type="text" name="word" class="form-control" placeholder="search for...">
   </div>
</form>
<a href="#>Inbox <span class="badge">42</span></a>
<button class="btn btn-primary" type="button">
messages <span class="badge">4</span>
</button>
</body> 
</html>