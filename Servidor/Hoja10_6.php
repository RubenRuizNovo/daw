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
    $array1 = array(100, 99, 50, 343, "100", 13, 22, 4, 6, 50, 99, 100, 343, "99");

    for ($i=0; $i < count($array1); $i++) { 
        for ($x=0; $x < count($array1); $x++) {
            $val_arr = array($array1[$x]);
            if(in_array($array1[$i], $val_arr)) {

            }
        }
    }
    ?>

</body>

</html>