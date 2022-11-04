<?php
    //Devolver los valores seleccionados

    function optionSelected($estacion) {
        if (isset($_POST["estaciones"])) {
            $flag1 = false;
            foreach ($_POST["estaciones"] as $value) {
                if($estacion == $value) {
                    $flag1 = true;
                }
            }
            if ($flag1) {
                return "selected";
            }else{
                return "";
            }
        }
    }

    //Validacion Nombre (Que empiece por mayusculas y longitud min 3 max 20)

    function validadorNombre($nombre) {
        if (strlen($nombre) < 3 || strlen($nombre) > 20) {
            if(ctype_upper($nombre[0]) != true) {
                echo "Error. El nombre tiene que tener una longitud entre 3 y 20 caracteres y la primera letra tiene que ser mayuscula. <br>";
                return true;
            } else {
                echo "Error. El nombre tiene que tener una longitud entre 3 y 20 caracteres. <br>";
                return true;
            }
            
        }elseif (ctype_upper($nombre[0]) != true) {
            echo "Error. La primera letra del nombre tiene que ser mayuscula. <br>";
            return true;
        }else {
            //echo "El nombre indicado es correcto. <br>";
            return false;
        }

    }

    //Validacion Apellido (Que empiece por mayusculas y longitud min 3 max 20)

    function validadorApellido($apellido) {
        if (strlen($apellido) < 3 || strlen($apellido) > 20) {
            if(ctype_upper($apellido[0]) != true) {
                echo "Error. El apellido tiene que tener una longitud entre 3 y 20 caracteres y la primera letra tiene que ser mayuscula. <br>";
                return true;
            } else {
                echo "Error. El apellido tiene que tener una longitud entre 3 y 20 caracteres. <br>";
                return true;
            }
            
        }elseif (ctype_upper($apellido[0]) != true) {
            echo "Error. La primera letra del apellido tiene que ser mayuscula. <br>";
            return true;
        }else {
            //echo "El apellido indicado es correcto. <br>";
            return false;
        }
    }

    //Validacion Color (Tiene que ser Blanco)

    function validadorColor($color) {
        if ($color != "#ffffff") {
            echo "Error. El color no es el deseado. Se esperaba el color blanco. <br>";
            return true;
        }else {
            //echo "El color indicado es correcto. <br>";
            return false;
        }
    }

    //Validacion Email (Que contenga el @)

    function validadorEmail($email) {
        if (!str_contains($email, "@")) {
            echo "Error. El email introducido no es un E-Mail. <br>";
            return true;
        }else {
            //echo "El email indicado es correcto. <br>";
            return false;
        }
    }

    //Validacion Buscar (Cadena min 5 y max 20)

    function validadorBuscar($buscar) {
        if (strlen($buscar) < 5 || strlen($buscar) > 20) {
            echo "Error. El texto de buscar tiene que tener una longitud entre 5 y 20. <br>";
            return true;
        }else {
            //echo "El texto indicado es correcto. <br>";
            return false;
        }
    }

    //Validacion Fecha Nacimiento (Que el año sea superior a 1900)

    function validadorFecha($fecha_nacimiento) {
        $aux = explode("-",$fecha_nacimiento);
        if($aux[0] < 1900){
            echo "Error. La fecha indicada es inferiora 1900. <br>";
            return true;
        }else {
            //echo "La fecha indicada es correcta. <br>";
            return false;
        }
    }

    //Validacion Edad (Que tenga mas de 18 años)

    function validadorEdad($edad) {
        if ($edad < 18) {
            echo "Error. La edad indicada es menor de 18. <br>";
            return true;
        }else {
            //echo "La edad indicada es correcta. <br>";
            return false;
        }
    }

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

        $val1 = validadorNombre($nombre);
        $val2 = validadorApellido($apellido);
        $val3 = validadorColor($color);
        $val4 = validadorEmail($email);
        $val5 = validadorBuscar($buscar);
        $val6 = validadorFecha($fecha_nacimiento);
        $val7 = validadorEdad($edad);
        $flag = false;
        if ($val1) {
            $flag = $val1;
        }elseif ($val2) {
            $flag = $val2;
        }elseif ($val3) {
            $flag = $val3;
        }elseif ($val4) {
            $flag = $val4;
        }elseif ($val5) {
            $flag = $val5;
        }elseif ($val6) {
            $flag = $val6;
        }elseif ($val7) {
            $flag = $val7;
        }

        if (!$flag) {
            header("Location: principal.php");
        }
    }
?>