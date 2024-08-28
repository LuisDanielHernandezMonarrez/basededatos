<?php

$p=explode(',',$entrada);     //LA CADENA DE ENTRADA SE DESCOMPONE EN UN ARREGLO 

echo '<form action="index.php">';
echo '<table>';

$i=0;
while ($p[$i]){                                             //POR CADA ELEMENTO DEL ARREGLO DE PARAMETROS SE IMPRIME UN CUADRO DE TEXTO
    echo '<tr>';
	echo '<td align="right">'.$p[$i].': </td>';
	echo '<td><input type="text" name="'.$p[$i].'" ></td>';  
	echo '</tr>';
	$i=$i+1;
	}		
echo '<input type="hidden" name="procedimiento" value='.$procedimiento.'>';	
echo '</form>';
echo '</table>';
echo '<p align="center"><input type="submit" name="opcion_menu" value="ConsultaProc"></p>';

?>