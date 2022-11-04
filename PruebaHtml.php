<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = $_POST["nombre"];
        $estaciones = $_POST["estaciones"];
        $apellido = $_POST["apellido"];
        $color = $_POST["color"];
        $email = $_POST["email"];
        $buscar = $_POST["buscar"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $edad = $_POST["edad"];
        $pagina_personal = $_POST["pagina_personal"];
        $horario_abrir = $_POST["horario_abrir"];
        $horario_cerrar = $_POST["horario_cerrar"];
        $sexo = $_POST["sexo"];

        $flag = false;
        $errores = array();

        if ($nombre == "") {
            array_push($errores, "Falta el campo Nombre");
            $flag = true;
        }
        if ($estaciones == "") {
            array_push($errores, "Falta el campo Estacion");
            $flag = true;
        }
        if ($apellido == "") {
            array_push($errores, "Falta el campo Apellido");
            $flag = true;
        }
        if ($color == "") {
            array_push($errores, "Falta el campo Color");
            $flag = true;
        }
        if ($email == "") {
            array_push($errores, "Falta el campo Email");
            $flag = true;
        }
        if ($buscar == "") {
            array_push($errores, "Falta el campo Buscar");
            $flag = true;
        }
        if ($fecha_nacimiento == "") {
            array_push($errores, "Falta el campo Fecha nacimiento");
            $flag = true;
        }
        if ($edad == "") {
            array_push($errores, "Falta el campo Edad");
            $flag = true;
        }
        if ($pagina_personal == "") {
            array_push($errores, "Falta el campo Pagina Personal");
            $flag = true;
        }
        if ($horario_abrir == "") {
            array_push($errores, "Falta el campo Horario 1");
            $flag = true;
        }
        if ($horario_cerrar == "") {
            array_push($errores, "Falta el campo Horario 2");
            $flag = true;
        }
        if ($sexo == "") {
            array_push($errores, "Falta el campo sexo");
            $flag = true;
        }

        if ($flag) {
            print_r($errores);
        }else{
            echo "Estan todos los datos correctos";
        }
    }
?>