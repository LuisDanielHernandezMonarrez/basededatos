<?php

$p=explode(',',$entrada);          //LA CADENA DE ENTRADA SE DESCOMPONE EN UN ARREGLO 

echo '<form action="index.php">';
echo '<table>';

$i=0;
while ($p[$i]){                    // POR CADA ELEMENTO DEL ARREGLO SE IMPRIME UN CUADRO DE TEXTO PARA CAPTURA
    echo '<tr>';
	echo '<td align="right">'.$p[$i].': </td>';
	echo '<td><input type="text" name="'.$p[$i].'" ></td>';  
	echo '</tr>';
	$i=$i+1;
	}		
echo '<input type="hidden" name="funcion" value='.$funcion.'>';	     // SE INDICA CUAL FUNCION SE VA A CONSULAR
echo '<input type="hidden" name="salida" value='.$salida.'>';	     // SE INDICA CUAL ES LA VARIABLE DE SALIDA DE LA FUNCION
echo '</form>';
echo '</table>';
echo '<p align="center"><input type="submit" name="opcion_menu" value="ConsultaFn"></p>';  // SE MANDA A LA OPCION DE CONSULTA  

?>