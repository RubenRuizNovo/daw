<?php
    //echo "<pre>";
    //echo $_FILES["imagen"]["name"];
    print_r($_FILES);
    $nombreRuta = $_POST["ruta"];

    echo "ESta es la ruta enviada: $nombreRuta <br>";

    if (file_exists($nombreRuta)) {
        echo "La ruta si existe <br>";
    }else {
        echo "La ruta no existe <br>";
    }

    if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
        $nombreDirectorio = $nombreRuta;
        $nombreFichero = $_FILES["imagen"]["name"];
        $nombreCompleto = $nombreDirectorio.$nombreFichero;
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombreFichero = $idUnico. "-" .$nombreFichero;
            $nombreCompleto = $nombreDirectorio.$nombreFichero;
            echo "Is File inside <br>";
        }else {
            echo "Is no file inside <br>";
        }
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$nombreCompleto);
        echo "Fichero subido con el nombre: $nombreFichero<br>";
    }else {
        print("No se ha podido subir el fichero <br>");
    }

    //readfile("a.txt");
