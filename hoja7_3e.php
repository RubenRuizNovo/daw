<html>
    <head>
    </head>

<body>
<?php
    $productos=array(
        "procesador" => array (
        "AMD" => "K7 XP 1800",
        "PENTIUM" => "IV 2,5 Ghz"
        ),
        "disco_duro" => array(
        "SEAGATE" => "40GB 10000 rpm",
        "SAMSUNG" => "40GB 7200 rpm",
        "WESTERN_DIGITAL" => "60GB 7200 rmp 8MB caché"
        )
        );
        foreach ($productos as $key => $value) {
            echo "$key.<br>";
            foreach ($productos[$key] as $key1 => $value1) {
                echo "Marca: $key1, Caracteristicas: $value1.<br>";
            }
        } 
        

        
  ?>

</body>
    </html>