<?php

$MiFecha = "2022-10-13";

$a = explode("-",$MiFecha);
print_r($a);

function validadorFecha($fecha_nacimiento) {
        if(date("Y",$fecha_nacimiento) < 1900){
            echo "Error. La fecha indicada es inferiora 1900. <br>";
        }else {
            echo "La fecha indicada es correcta. <br>";
            return false;
        }
    }
?>