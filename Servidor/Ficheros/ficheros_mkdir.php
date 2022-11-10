<?php
$ruta = "./NuevaCarpeta/NuevaCarpeta2/NuevaCarpeta3";
if (!mkdir($ruta,0777,true)) {
    die("Fallo al crear las carpetas");
}
mkdir($ruta);