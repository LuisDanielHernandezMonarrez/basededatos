<?php
include "datos.php";

$enlace = mysqli_connect($host, $usuario, $password, $bd);

$tabla=$_GET["tabla"];

$consulta_sql="SELECT * FROM $tabla limit 0";      // SE CONSULTAN LOS ATRIBUTOS SIN DATOS
$resultado= mysqli_query($enlace, $consulta_sql);

$renglon= mysqli_fetch_array($resultado);

mysqli_field_seek($resultado, 0);

echo '<form action="index.php">';
echo '<table>';

while ($atributo= mysqli_fetch_field($resultado)){                       // SE IMPRIME UN CUADRO DE TEXTO POR CADA ATRIBUTO
    echo '<tr>';
	echo '<td align="right">'.$atributo->name.': </td>';
	echo '<td><input type="text" name="'.$atributo->name.'" ></td>';  
	echo '</tr>';
	}		
echo '<input type="hidden" name="tabla" value='.$tabla.'>';	

echo '</form>';
echo '</table>';
echo '<p align="center"><input type="submit" name="opcion_menu" value="Insertar"></p>';  // SE MANDA A LA OPCION DE INSERTAR

?>