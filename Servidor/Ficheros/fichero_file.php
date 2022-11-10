<?php
$fich = fopen("fichero_ejemplo.txt", "r");
if ($fich === False){
    echo "No se encuentra el fichero o no se pudo leer<br>";
}else{
    $lineas = file("fichero_ejemplo.txt");

// Recorrer nuestro array, mostrar el código fuente HTML como tal y mostrar tambíen los números de línea.
foreach ($lineas as $num_linea => $linea) {
    echo "Línea #<b>{$num_linea}</b> : " . htmlspecialchars($linea) . "<br />\n";
}
    while( !feof($fich) ){
        $car = fgets($fich, 40);        
        echo "<br>";    
        echo $car;
    }
}
fclose($fich); 