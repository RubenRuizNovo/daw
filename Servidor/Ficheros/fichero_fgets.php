<?php

// Esto no funciona xDDDD

// $gestor = fopen("fichero_ejemplo.txt", "r");
// if ($gestor) {
//     while (($búfer = fgets($gestor, 10)) !== false) {
//         echo $búfer;
//     }
//     if (!feof($gestor)) {
//         echo "Error: fallo inesperado de fgets()\n";
//     }
//     fclose($gestor);
// }


    $fich = fopen("fichero_ejemplo.txt", "r");
    if ($fich === False){
        echo "No se encuentra el fichero o no se pudo leer<br>";
    }else{
        while( !feof($fich) ){
            $car = fgets($fich, 40);        
            echo "<br>";    
            echo $car;
        }
    }
    fclose($fich); 


?>
