
                     <html>
    <head>
    </head>

<body>
<?php
    $equipo_futbol = array(
    array("Rooney","Chicharito","Gigs"),
    array("Suarez"),
    array("Torres","Terry","Etoo")
    );
    foreach ($equipo_futbol as $key => $value) {
        foreach ($equipo_futbol[$key] as $key1 => $value1) {
            print_r($equipo_futbol[$key][$key1]."<br>");
        }
    }
        
  ?>

</body>
    </html>