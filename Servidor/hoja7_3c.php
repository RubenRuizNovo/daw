<html>
    <head>
    </head>

<body>
<?php
    $datos = array(
        array(array(0, 0, 0),
              array(0, 0, 1),
              array(0, 0, 2) 
              ),
        array(array(0, 1, 0),
              array(0, 1, 1),
              array(0, 1, 2) 
              ),
        array(array(0, 2, 0),
              array(0, 2, 1),
              array(0, 2, 2) 
              )
        );
        foreach ($datos as $key => $value) {
            foreach ($datos[$key] as $key1 => $value1) {
                foreach ($datos[$key][$key1] as $key2 => $value2) {
                    echo $datos[$key][$key1][$key2]."  ";
                }
                echo "<br>";
            }
            echo "<br>";
        }

        
  ?>

</body>
    </html>