<?php
    include "validadorFormularioMarkII.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "recepcionFichero.php";

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
        $ruta = $_POST["ruta"];


     }
?>

<html>
    <head>

    </head>
    <body>
        <form 
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        method="post"
        enctype="multipart/form-data">

        <label for="estaciones">Estaciones</label>
        <select multiple size ="3" name="estaciones[]">
            <option value="" selected disabled hidden></option>
            <option value="inv" <?php echo optionSelected("inv")?> >Invierno</option>
            <option value="pri" <?php echo optionSelected("pri")?> >Primavera</option>
            <option value="ver" <?php echo optionSelected("ver")?> >Verano</option>
            <option value="oto" <?php echo optionSelected("oto")?> >Otono</option>
        </select>
        <br>
        <br>

        <label for="color">Color favorito</label>
        <input type="color" name="color" value="<?php if(isset($color)&& !validadorColor($color)) echo $color;?>">

        <br><br>

        <label for="buscar">Buscar</label>
        <input type="text" name="buscar" value="<?php if(isset($buscar) && !validadorBuscar($buscar)) echo $buscar;?>">

        <br><br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php if(isset($nombre) && !validadorNombre($nombre)) echo $nombre;?>">

        <br><br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" value="<?php if(isset($apellido) && !validadorApellido($apellido)) echo $apellido;?>">

        <br><br>

        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?php if(isset($email) && !validadorEmail($email)) echo $email;?>">

        <br><br>

        <label for="fecha_nacimiento">Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="<?php if(isset($fecha_nacimiento) && !validadorFecha($fecha_nacimiento)) echo $fecha_nacimiento;?>">

        <br><br>

        <label for="edad">Edad (de 0 a 150)</label>
        <input type="number" min="0" max="150" name="edad" value="<?php if(isset($edad) && !validadorEdad($edad)) echo $edad;?>">

        <br><br>

        <label for="pagina_personal">Pagina personal</label>
        <input type="text" name="pagina_personal" value="<?php if(isset($pagina_personal)) echo $pagina_personal;?>">

        <label for="horario_abrir">Horario: De </label>
        <input type="time" name="horario_abrir" value="<?php if(isset($horario_abrir)) echo $horario_abrir;?>">
        
        <label for="horario_cerrar"> a: </label>
        <input type="time" name="horario_cerrar" value="<?php if(isset($horario_cerrar)) echo $horario_cerrar;?>">

        <br><br>
    
        <label for="sexo"> Sexo: </label>
        <input type="radio" id="hombre" name="sexo" value="hombre" checked>
        <label for="html">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="mujer">
        <label for="mujer">Mujer</label>

        <br><br>

        <input type="hidden" name="MAX_FILE_SIZE" value="10240000000">
        <input type="file" name="imagen"/>
        <input type="text" name="ruta" <?php if(isset($_POST["ruta"])) echo $_POST["ruta"]?>/>

        <input type="submit">

        
    </form>
    </body>
</html>