<?php

$atributos_actualizar='';   // cadena con lista da atributos a actualizar con sus nuevos valores
foreach ($_GET as $atributo=>$valor)
   		{
			if ($atributo=='llave'){            // si el atributo del formulario es la llave primaria
				$llave=$valor;			        // se toma el nombre del atributo
				$llave_valor=$_GET[$llave];     // se toma el valor del atributo
			}
			
				
			if ($atributo=='tabla')            // se definió anteriormente el nombre de la tabla a actualizar
				$tabla=$valor;
			
			if ($atributo!='tabla' && $atributo!='llave' && $atributo!='opcion_menu'){
				if ($atributos_actualizar!='')
					$atributos_actualizar=$atributos_actualizar.",";  // se va formando la lista de atributos a actualizar
				
				$atributos_actualizar=$atributos_actualizar.$atributo."='".$valor."'";}
				
   		}		

$consulta_sql="UPDATE $tabla SET ".$atributos_actualizar." WHERE ".$llave."='".$llave_valor."'";
echo '<br>';


// Ahora hacemos la conexión al servidor de base de datos y le enviamos la petición de actualización
include "datos.php";
$enlace = mysqli_connect($host, $usuario, $password, $bd);
mysqli_query($enlace, $consulta_sql);

// Sólo para ver la tabla ya con los datos modificados, la desplegamos aquí mismo
$consulta_sql="SELECT * FROM $tabla";
$resultado=mysqli_query($enlace, $consulta_sql);
include "desplegar_tabla.php";

mysqli_close($enlace);


?>