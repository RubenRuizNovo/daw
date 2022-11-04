<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  
</head>

<body>

<?php
       $array = array(
        'k3' => 'JUAN',
        'k5' => 'Álvaro',
        'k0' => 'Maite',
        'k2' => 'ÁLVARO',
        'k1' => 'Juan',
        'k4' => 'Martina');


        //a)	Ordenarlo por los valores de mayor a menor sin mantener las asociaciones clave-valor

            // sort($array);
            // print_r($array);

        //b)	Igual pero manteniendo las asociaciones

            // asort($array);
            // print_r($array);

        //c)	Ordenarlo por las claves de menor a mayor

            // krsort($array);
            // print_r($array);

        //d)	Mezcla el array aleatoriamente

            // shuffle($array);
            // print_r($array);
            // echo"<br>";

        //e)	Obtén un array con las claves de dos valores seleccionados aleatoriamente.
            
            // print_r(array_rand($array,2));
            // echo"<br>";

        //f)	Ordénalo por los valores de mayor a menor sin diferenciar mayúsculas y minúsculas.

            // natcasesort($array);
            // print_r($array);

       
    
 ?> 

</body>
</html>