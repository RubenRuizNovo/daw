<html>
    <head>
    </head>

<body>
<?php
    $supermercado = array(
        "Electrodomesticos" => array("Televisor",  "Heladera"),
         "alimentos" => array("Carne", "Leche", "Verduras"));

        foreach ($supermercado as $key => $value) {
            print_r("$key"."<br>");
            foreach ($supermercado[$key] as $key1 => $value1) {
                print_r($supermercado[$key][$key1]."<br>");
            }
            echo"<br>";
        }

        
  ?>

</body>
    </html>