<?php
	include "navegar.php";
?>
<!DOCTYPE html>
<!--
Template Name: Fluffster
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>PHP-PL/SQL</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">



<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace"> 
		<li><a href="http://www.uabc.mx"                      target="blank"                 title="Universidad Autónoma de Baja California"   ><i class="fas fa-university"> </i></a></li>	  
		<li><a href="http://fcqi.tij.uabc.mx"                 target="blank"                  title="Facultad de Ciencias Químicas e Ingeniería"><i class="fas fa-university">     </i></a></li>
		<li><a href="https://cucapa.tij.uabc.mx/computacion/" target="blank" title="Ingeniería en Computación"><i class="fas fa-university"></i></a></li>
    </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">  
	  <li><a href="ver_codigo.php?archivo=<?php echo $archivo?>" target="blank" title="Ver código PHP de la opción seleccionada"><i class="fas fa-file-alt"></i></a></li>
      <li><a href="ver_codigo.php?archivo=index.php" target="blank" title="Ver código PHP de index"><i class="fas fa-bars"></i></a></li>
      <li><a href="ver_codigo.php?archivo=navegar.php" target="blank" title="Ver código PHP de estructura de navegación (switch-case)"><i class="fas fa-ship"></i></a></li>
	  <li><a href="ejemplo_clase_bd.zip" target="blank" title="Descargar scripts PL/SQL de la BD ventas"><i class="fas fa-database"></i></a></li>
    </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <section>
      <div></div>
      <div>
       <h3 class="heading">Bases de Datos<br>Prof. Olivia Mendoza<br><a href="index.php">PHP-PL/SQL</a></h3>
      </div>
       <div><img src="images/Isotipo.png"></div>
    </section>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->

<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
     <li class="active"><a href="index.php">1] Bienvenida</a></li>
	
      <li><a class="drop" href="#">2] Consultas</a>
        <ul>
          <li><a href="index.php?opcion_menu=21">1] Tabla Cliente</a></li>
		  <li><a href="index.php?opcion_menu=22">2] Tabla Producto</a></li>
	      <li><a href="index.php?opcion_menu=23">3] Vista Facturas</a></li>
		  <li><a href="index.php?opcion_menu=24">4] Vista Productos Vendidos</a></li>
		  <li><a href="index.php?opcion_menu=25">5] Función Ventas Totales Fecha</a></li>
		  <li><a href="index.php?opcion_menu=26">6] Función Ventas Totales Periodo</a></li>
		  <li><a href="index.php?opcion_menu=27">7] Función Ventas Totales Cliente-Periodo</a></li>
          <li><a href="index.php?opcion_menu=28">8] Procedimiento Busca Cliente</a></li>
        </ul>
      </li>
	  
	  <li><a class="drop" href="#">3] Actualizaciones</a>
        <ul>
          <li><a href="index.php?opcion_menu=31">1] Productos</a></li>
		  <li><a href="index.php?opcion_menu=32">2] Clientes</a></li>
		  <li><a href="index.php?opcion_menu=33">3] ABC Productos</a></li>	
		  <li><a href="index.php?opcion_menu=34">4] ABC Clientes</a></li>	
		</ul> 
	   </li>
	   
 <!-- Próximamente      
	  <li><a class="drop" href="#">4] Procesos específicos</a>
        <ul>
          <li><a href="index.php?opcion_menu=41">1] Función Ventas</a></li>
          <li><a href="index.php?opcion_menu=42">2] Procedximamimiento Factura</a></li>
        </ul>
      </li>
-->	  
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>

<!-- ################################################################################################ -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading"><?php echo $encabezado;?></h3>
	  
      <p><?php include $archivo;?></p>
	  
	 
    </div>
    
    
  </main>
</div>


<div class="wrapper row5">

  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - Todos los derechos reservados - <a href="#">http://omd-prof.xyz/</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>