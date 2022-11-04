<?php
echo "prueba1 <br>";
ValidadorNombre("ja");
echo "<br> prueba2 <br>";
validadorNombre("Juan");

function validadorNombre($nombre) {
        if (strlen($nombre) < 3 || strlen($nombre) > 20) {
            if(ctype_upper($nombre[0]) != true) {
                echo "Error. El nombre tiene que tener una longitud entre 3 y 20 caracteres y la primera letra tiene que ser mayuscula. <br>";
                return true;
            } else {
                echo "Error. El nombre tiene que tener una longitud entre 3 y 20 caracteres. <br>";
                return true;
            }
            
        }elseif (ctype_upper($nombre[0]) != true) {
            echo "Error. La primera letra del nombre tiene que ser mayuscula. <br>";
            return true;
        }else {
            echo "El nombre indicado es correcto. <br>";
            return false;
        }

    }

    ?>