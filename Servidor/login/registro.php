<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="Formulario">
            <form>
                <h1>Registrarse</h1>
                <br><br>
                <label for="nombre"> Nombre: </label>
                <input type="text" name="nombre"/>
                <br><br>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido"/>
                <br><br>
                <label for="email">Email: </label>
                <input type="email" name="email"/>
                <br><br>
                <label for="Trabajo">Trabajas:</label>
                <label for="Si">SI: </label>
                <input type="radio" id="Si" name="trabajas"/>
                <label for="No">NO: </label>
                <input type="radio" id="No" name="trabajas"/>
                <br><br>
                <label for="edad">Edad: </label>
                <input type="number" name="edad"/>
                <br><br>
                <label for="peso">Peso: </label>
                <input type="number" name="peso"/>
                <br><br>
                <label for="url">URL: </label>
                <input type="url" name="url"/>
                <br><br>
                <input type="submit">
                <br><br>
                <a href="login.php">Login</a>
            </form>
        </div>
    </body>
</html>
