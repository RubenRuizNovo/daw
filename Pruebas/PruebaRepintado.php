<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" src="style.css" type='text/css' href='style.css'>
    </head>
    <body>
        <h2>Formulario Simple</h2>
        <h3>Búsqueda de canciones</h3>
            <?php
            if(!isset($_POST['enviar'])){
            ?> 
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
                    <table>
                    <tr>
                        <td>Texto a buscar:</td>
                        <td><input type='text' name='buscar'/></td>
                    </tr>
                    <tr>
                        <td>Buscar en:</td>
                        <td class='Normal'><input type='radio' id='opcion1' name='busqueda' value='Titulos de canción'/>
                            <label for='opcion1'>Titulos de canción</label>
                            <input type='radio' id='opcion2' name='busqueda' value='Nombres de álbum'/>
                            <label for='opcion2'>Nombres de álbum</label>
                            <input type='radio' id='opcion3' name='busqueda' value='Ambos campos'/>
                            <label for='opcion3'>Ambos campos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Género musical: </td>
                        <td><select name='select'>
                                <option value='Todos'>Todos</option>
                                <option value='Acústica'>Acústica</option>
                                <option value='Banda Sonora'>Banda Sonora</option>
                                <option value='Blues'>Blues</option>
                                <option value='Electrónica'>Electrónica</option>
                                <option value='Folk'>Folk</option>
                                <option value='Jazz'>Jazz</option>
                                <option value='New Age'>New Age</option>
                                <option value='Pop'>Pop</option>
                                <option value='Rock'>Rock</option>'
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type='Submit' name='enviar' value='enviar'/></td>
                    </tr>
                </table>
            </form>
         <?php
            }
            elseif(isset($_POST['enviar'])){
         ?>
            <form action='index.php' method='post'>
                    <table>
                    <tr>
                        <td>Texto a buscar:</td>
                        <td class="Normal"><input type='text' name='buscar'/><br><?php if($_POST['buscar']==""){echo "<span>Por favor, incluir texto a buscar</span>";}?></td>
                    </tr>
                    <tr>
                        <td>Buscar en:</td>
                        <td class='Normal'><input type='radio' id='opcion1' name='busqueda' value='Titulos de canción'/>
                            <label for='opcion1'>Titulos de canción</label>
                            <input type='radio' id='opcion2' name='busqueda' value='Nombres de álbum'/>
                            <label for='opcion2'>Nombres de álbum</label>
                            <input type='radio' id='opcion3' name='busqueda' value='Ambos campos'/>
                            <label for='opcion3'>Ambos campos</label><br>
                            <?php if(!isset($_POST['busqueda'])){echo "<span>Por favor, incluir donde buscar</span>";}?>
                        </td>
                    </tr>
                    <tr>
                        <td>Género musical: </td>
                        <td><select name='select'>
                                <option value='Todos'>Todos</option>
                                <option value='Acústica'>Acústica</option>
                                <option value='Banda Sonora'>Banda Sonora</option>
                                <option value='Blues'>Blues</option>
                                <option value='Electrónica'>Electrónica</option>
                                <option value='Folk'>Folk</option>
                                <option value='Jazz'>Jazz</option>
                                <option value='New Age'>New Age</option>
                                <option value='Pop'>Pop</option>
                                <option value='Rock'>Rock</option>'
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type='Submit' name='enviar' value='enviar'/></td>
                    </tr>
                </table>
            </form>
        <?php
            }
            else{
                echo "<h2>Formulario Simple. Resultados del formulario</h2>";
                echo "<p>Estos son los datos introducidos: </p>";
                echo "<ul>";
                echo "<li>Texto de búsqueda: ".$_POST['buscar']."</li>";
                echo "<li>Buscar en: ".$_POST['busqueda']."</li>";
                echo "<li>Género: ".$_POST['select']."</li>";
                echo "</ul>";
                echo "<p>[ <a href='index.php'>Nueva búsqueda</a> ]</p>"; 
            }
        ?>
    </body>
</html>