<?php
include "datos.php";

$enlace = mysqli_connect($host, $usuario, $password, $bd);

$tabla=$_GET["tabla"];
$llave=$_GET["llave"];
$valor=$_GET["valor"];

$consulta_sql="SELECT * FROM $tabla where $llave='$valor'";  
$resultado= mysqli_query($enlace, $consulta_sql);

$renglon= mysqli_fetch_array($resultado);

mysqli_field_seek($resultado, 0);

echo '<form action="index.php">';
echo '<table>';

while ($atributo= mysqli_fetch_field($resultado)){
    echo '<tr>';
	echo '<td align="right">'.$atributo->name.': </td>';
	if ($atributo->name==$llave)
		echo '<td><input type="text" name="'.$atributo->name.'" value="'.$renglon[$atributo->name].'" readonly></td>'; 
	else
		echo '<td><input type="text" name="'.$atributo->name.'" value="'.$renglon[$atributo->name].'" ></td>';  
	echo '</tr>';
	}		
echo '<input type="hidden" name="tabla" value='.$tabla.'>';	
echo '<input type="hidden" name="llave" value='.$llave.'>';



echo '</form>';
echo '</table>';
echo '<p align="center"><input type="submit" name="opcion_menu" value="Actualizar"></p>';

?>