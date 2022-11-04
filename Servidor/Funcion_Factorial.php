<?php
    $num = 5;
    echo "El numero para el factorial es: $num <br>";


    function calculadora($operacion,$num1) {
        $resultado = $operacion($num1);
        return $resultado;
    }

    function factorial ($num) {

        if($num < 0) {
            echo "Argumento no valido. -1";
            return false;
        }elseif (gettype($num) != "integer") {
            echo "Argumento no valido. -1";
            return false;
        }else {
            $fac = $num;
            for ($i=$num -1; $i > 0; $i--) { 
                $fac = $fac * $i;
            }
            return $fac;
        }
    }

    $fac = calculadora("factorial",$num);


    if ($fac != False) {
        echo "El factorial de: $num es igual a : $fac";
    }

    function manejadorErrores($errno, $str, $file, $line) {
        echo "<br> Ocurrió el error: $errno <br>";
    }
    set_error_handler("manejadorErrores");

    $a = $b;
?>