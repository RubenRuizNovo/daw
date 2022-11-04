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
        header("Location: principal.php");
        //echo "Estan todos los datos correctos";
    }
}
?>

<html>
    <head>

    </head>
    <body>
        <form 
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        method="post">

        <label for="estaciones">Estaciones</label> 
        <select name="estaciones">
            <option value="" selected disabled hidden></option>
            <option value="inv">Invierno</option>
            <option value="pri">Primavera</option>
            <option value="ver">Verano</option>
            <option value="oto">Otono</option>
        </select>
        <br>
        <br>
        <label for="color">Color favorito</label>
        <input type="color" name="color">

        <br><br>

        <label for="buscar">Buscar</label>
        <input type="text" name="buscar">

        <br><br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <br><br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">

        <br><br>

        <label for="email">E-mail</label>
        <input type="email" name="email">

        <br><br>

        <label for="fecha_nacimiento">Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento">

        <br><br>

        <label for="edad">Edad (de 0 a 150)</label>
        <input type="number" min="0" max="150" name="edad">

        <br><br>

        <label for="pagina_personal">Pagina personal</label>
        <input type="text" name="pagina_personal">

        <label for="horario_abrir">Horario: De </label>
        <input type="time" name="horario_abrir">
        
        <label for="horario_cerrar"> a: </label>
        <input type="time" name="horario_cerrar">

        <br><br>
    
        <label for="sexo"> Sexo: </label>
        <input type="radio" id="hombre" name="sexo" value="hombre">
        <label for="html">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="mujer">
        <label for="mujer">Mujer</label>

        <br><br>

        <input type="submit">

        
    </form>
    </body>
</html>