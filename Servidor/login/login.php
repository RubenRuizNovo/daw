<html>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "validadorlogin.php";
        }
    ?>
    <head>
        
    </head>
    <body>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario"/>
        <br>
        <label for="contraseña">Contraseña: </label>
        <input type="text" name="contraseña"/>
        <br>
        <input type="submit"/>
        <a href="registro.php"></a>
    </body>
</html>