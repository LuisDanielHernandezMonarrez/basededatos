
<?php
$archivo=$_GET["archivo"];
$file = file($archivo);
 
foreach($file as $linenum => $line){
    echo "<b>{$linenum}:</b> ".htmlspecialchars($line).'<br>';
}

?>