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
    $personas = array(
        43434343 => array(
            "apellido1" => "Rodriguez",
            "apellido2" => "Fernandez",
            "nombre" => "Juan"
        ),
        45874236 => array(
            "apellido1" => "Del Carmen",
            "apellido2" => "Marin",
            "nombre" => "Ana"
        ),
        85632147 => array(
            "apellido1" => "Postigo",
            "apellido2" => "Garcia",
            "nombre" => "Daniel"
        ),
        78410325 => array(
            "apellido1" => "Ruiz",
            "apellido2" => "Novo",
            "nombre" => "Ruben"
        ),
        78451260 => array(
            "apellido1" => "Jimenez",
            "apellido2" => "Diaz",
            "nombre" => "Maria"
        )
    );

    
    asort($personas);
    
    foreach($personas as $k => $v) {
        echo "<h1>" .$k ."</h1>";
        foreach ($v as $kk => $vv) {
            echo "<p> $kk: $vv </p>";
        }
    }
    ?>

</body>

</html>