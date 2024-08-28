<?php

$funcion=$_GET["funcion"];   //Nombre de la función PL/SQL a consultar
$salida=$_GET["salida"];     //Nombre de la variable de salida de la función  PL/SQL a consultar

$cadena_valor='';
foreach ($_GET as $control=>$valor)
   		{
		 $cadena_valor=$cadena_valor."'".$valor."'";  	
		if($control!='funcion' && $control!='salida' && $control!='opcion_menu')	
			$valores_consultar=$valores_consultar.$cadena_valor;
		    $cadena_valor=',';
   		}		

$consulta_sql="SELECT ".$funcion."(".$valores_consultar.") as ".$salida; // Consulta a la función PL/SQL

echo '<br>';


// Ahora hacemos la conexión al servidor de base de datos y le enviamos la petición de consulta_sql

include "datos.php";
$enlace = mysqli_connect($host, $usuario, $password, $bd);
$resultado=mysqli_query($enlace, $consulta_sql);

include "desplegar_tabla.php";   // El resultado de la función se despliega igual que una tabla

mysqli_close($enlace);

?>