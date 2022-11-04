<html>
    <head>
    </head>

<body>
<?php
    $alumno=array(
        "nombre" => "José",
        "apellidos" => "Martínez Roca",
        "telefono" => "96 361 66 54",
        "direccion" => "C/ Arco del triunfo 13",
        "dni" => "22 111 055",
        "num_matricula" => "6666",
        "facultad" => "Facultad Informática",
        "curso" => "5" 
        );
    $codigo=array();
    $valor=array();
    foreach ($alumno as $key => $value) {
        $codigo[] = $key;
        $valor[] = $value;
    } 
    print_r($codigo);
    echo"<br>";
    print_r($valor);
        
  ?>

</body>
    </html>