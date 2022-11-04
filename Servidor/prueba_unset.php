<html>
    <head>
    </head>

<body>
<?php
    $arr1 = array();
    $cont = 0;
    for ($i=1; $cont < 10; $i++) {
        if (esPrimo($i) && $i != 2) {
            $cont++;
            $arr1[] = $i;
        }
    }
    function esPrimo($numero){
    for ($i = 2; $i < $numero; $i++) {
        if (($numero % $i) == 0) {
            // No es primo
            return false;
        }
    }
    // Es primo
    return true;
}
    for ($i=0; $i < count($arr1); $i++) { 
        echo "$arr1[$i] <br>";
    }
  ?>

</body>
    </html>