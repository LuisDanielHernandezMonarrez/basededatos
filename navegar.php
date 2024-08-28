
<?php

// VALIDACION DE OPCION ELEGIDA
if (!isset($_GET["opcion_menu"]))
	$opcion_elegida="1";
else 
	$opcion_elegida=$_GET["opcion_menu"];

// ESTRUCTURA DE DECISICION PARA LA NAVEGACION

/* Cada opción numérica corresponde a un elemento del menú en index.php*/

switch($opcion_elegida)
{
	case '1':
		  $archivo='saludo.html';
		  $encabezado='Bienvenida';
	break;
	
	case '21':
		  $tabla='cliente';
		  $archivo='consulta_tabla.php';
		  $encabezado='Consulta a '.$tabla;
	break;
	
	case '22':
		  $tabla='producto';
		  $archivo='consulta_tabla.php';
		  $encabezado='Consulta a '.$tabla;
	break;
	
	case '23':
		  $tabla='vista_total_venta_factura';
		  $archivo='consulta_tabla.php';
		  $encabezado='Consulta a '.$tabla;
	break;
	
	case '24':
		  $tabla='vista_productos_vendidos';
		  $archivo='consulta_tabla.php';
		  $encabezado='Consulta a '.$tabla;
	break;
	
	case '25':
		  $funcion='ventas_totales_fecha';
		  $entrada='fecha';
		  $salida='Ventas';
		  $archivo='formulario_consulta_funcion.php';
		  $encabezado='Función '.$funcion;
	break;
	
	case '26':
		  $funcion='ventas_totales_periodo';
		  $entrada='fecha_inicio,fecha_final';
		  $salida='Ventas';
		  $archivo='formulario_consulta_funcion.php';
		  $encabezado='Función '.$funcion;
	break;
	
   case '27':
		  $funcion='ventas_totales_cliente_periodo';
		  $entrada='RFC,fecha_inicio,fecha_final';
		  $salida='Ventas';
		  $archivo='formulario_consulta_funcion.php';
		  $encabezado='Función '.$funcion;
	break;

   case '28':
		  $procedimiento='busca_cliente';
		  $entrada='subcadena';
		  $archivo='formulario_consulta_procedimiento.php';
		  $encabezado='Procedimiento '. $procedimiento;
	break;

	case '31':
		  $opcion_menu='formulario_editable';
		  $tabla='producto';
          $llave='codigo';
		  $archivo='consulta_tabla_ligas.php';
		  $encabezado='Modificar datos de tabla '.$tabla;
	break;
	
	case '32':
		  $opcion_menu='formulario_editable';
		  $tabla='cliente';
          $llave='RFC';
		  $archivo='consulta_tabla_ligas.php';
		  $encabezado='Modificar datos de tabla '.$tabla;
	break;

	case '33':
	      $opcion_menu='formulario_insertable';
	   	  $tabla='producto';
          $llave='codigo';
		  $archivo='consulta_tabla_abc.php';
		  $encabezado='ABC de tabla '.$tabla;
	break;
	
	case '34':
	      $opcion_menu='formulario_insertable';
	   	  $tabla='cliente';
          $llave='RFC';
		  $archivo='consulta_tabla_abc.php';
		  $encabezado='ABC de tabla '.$tabla;
	break;
	
/* Opciones que corresponden a operaciones generales configurables, reutilizables*/

	case 'formulario_editable':
		  $archivo='formulario_editable.php';
          $encabezado='Formulario para editar '.$_GET["tabla"];
	break;	
	
	case 'Actualizar':
		  $archivo='actualizar_tabla.php';
          $encabezado='Datos actualizados en '.$_GET["tabla"];
	  
	break;	
	
	case 'formulario_insertar':
		  $archivo='formulario_insertar.php';
          $encabezado='Formulario para insertar en '.$_GET["tabla"];
	break;
	
	case 'Insertar':
		  $archivo='insertar_tabla.php';
          $encabezado='Renglón agregado en '.$_GET["tabla"];
	break;
	
	case 'ConsultaFn':
		  $archivo='consulta_funcion.php';
          $encabezado='Resultado de la función '.$_GET["funcion"];
	break;
	
    case 'ConsultaProc':
		  $archivo='consulta_procedimiento.php';
          $encabezado='Resultado del procedimiento '.$_GET["procedimiento"];
	break;	
		
	default:
	      $archivo='error.txt';
		  $encabezado='Oops !';
	break;
/**/	
}


?>	

