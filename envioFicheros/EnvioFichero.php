<html>
    <?php
    $imagen = null;
    $ruta = null;
    $descripcion = null;
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "recepcionFichero.php";

            // $imagen = $_POST["imagen"];
            // $ruta = $_POST["ruta"];
            // $descripcion = $_POST["descripcion"];
    
         }
    ?>
    <head>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1020">
            <input type="file" name="imagen"/>
            <input type="text" name="ruta" value="<?php if(isset($_POST["ruta"])) echo $_POST["ruta"];?>"/>
            <input type="submit"/>
            <br><br>
            <textarea name="descripcion"><?php if(isset($_POST["descripcion"])) echo $_POST["descripcion"];?></textarea>
            
        </form>
    </body>
</html>