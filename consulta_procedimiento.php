<?php

$procedimiento=$_GET["procedimiento"];   //Nombre del procedimiento a ejecutar

$cadena_valor='';
foreach ($_GET as $control=>$valor)
   		{
		 $cadena_valor=$cadena_valor."'".$valor."'";  	                 //Se forma una cadena de parámetros a partir de los cuadros
		if($control!='procedimiento' && $control!='opcion_menu')	     //de texto del formulario
			$valores_consultar=$valores_consultar.$cadena_valor;
		    $cadena_valor=',';
   		}		

$consulta_sql="CALL ".$procedimiento."(".$valores_consultar.")";        //Se hace la llamada al procedimiento almacenado

echo '<br>';


// Ahora hacemos la conexión al servidor de base de datos y le enviamos la petición
include "datos.php";
$enlace = mysqli_connect($host, $usuario, $password, $bd);

mysqli_query($enlace, $consulta_sql);  //Ejecuta el procedimiento para crear la tabla temporal

$consulta_sql="SELECT * FROM tabla_temporal";
$resultado=mysqli_query($enlace, $consulta_sql);    // Consulta a la tabla temporal

include "desplegar_tabla.php";

mysqli_close($enlace);

?>