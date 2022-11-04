<?php
    //echo "<pre>";
    //echo $_FILES["imagen"]["name"];
    //print_r($_FILES);
    $nombreRuta = $_POST["ruta"];
    $descipcion = $_POST["descripcion"];

    if ($_FILES["imagen"]["error"] == 0) {
        if (file_exists($nombreRuta)) {
            echo "La ruta si existe";
        }else {
            echo "La ruta no existe";
        }
    
        if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
            $nombreDirectorio = $nombreRuta;
            $nombreFichero = $_FILES["imagen"]["name"];
            $nombreCompleto = $nombreDirectorio.$nombreFichero;
            if (is_file($nombreCompleto)) {
                $idUnico = time();
                $nombreFichero = $idUnico. "-" .$nombreFichero;
                $nombreCompleto = $nombreDirectorio.$nombreFichero;
                echo "Is File inside";
            }else {
                echo "Is no file inside";
            }
            move_uploaded_file($_FILES["imagen"]["tmp_name"],$nombreCompleto);
            echo "Fichero subido con el nombre: $nombreFichero<br>";
        }else {
            print("No se ha podido subir el fichero\n");
        }
    }elseif ($_FILES["imagen"]["error"] == 2) {
        echo "El archivo seleccionado es mas grande del esperado en el cliente.";
    }elseif ($_FILES["imagen"]["error"] == 1) {
        echo "El archivo seleccionado es mas grande del esperado en el servidor.";
    }elseif ($_FILES["imagen"]["error"] == 3) {
        echo "Error. El archivo se ha subido parcialmente.";
    }elseif ($_FILES["imagen"]["error"] == 6) {
        echo "Error. Falta la carpeta temporal.";
    }elseif ($_FILES["imagen"]["error"] == 4) {
        echo "No se ha enviado ningun archivo.";
    }

    

    //readfile("a.txt");
