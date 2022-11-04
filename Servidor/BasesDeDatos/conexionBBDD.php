<?php
    $mysqli = new mysqli("localhost", "root", "","empresa");
    if ( mysqli_connect_errno() ) {
    echo "Error de conexión a la BD: ".mysqli_connect_error();
    exit();
    }else {
        echo "Se ha conectado a la base de datos \n";
    }
    echo $mysqli->host_info . "\n";
    echo "<pre>";
    print_r($mysqli);

    $query = "SELECT * FROM usuarios";
    $resultado=$mysqli -> query($query) or die ($mysqli -> error);
    $numregistros=$resultado -> num_rows;
    echo "<p>El número de clientes con nombre Empresa* es: ",$numregistros,".</p>";

    echo "El resultado que espero empieza: <br>";
    // while ($registro = $resultado -> fetch_assoc()) {
    //     print_r($registro);

    // }
    $registro = $resultado -> fetch_assoc();
    
    echo "El nombre es: $registro[Nombre]";
    //print_r($registro);
    $registro = $resultado -> fetch_assoc();
    print_r($registro);
    echo $registro[1];
    echo "El resultado que espero acaba. <br>";

    
    
    while ($registro = $resultado -> fetch_assoc()) {
        echo "<tr>";
        foreach ($registro as $campo)
        echo "<td>",$campo, " </td>";
        echo "</tr>";
        echo "<br/>";
        }

    echo "Vamos a insertar una fila";

    // $query = "INSERT INTO `usuarios` (`Codigo`, `Nombre`, `Clave`, `Rol`) VALUES
    // (5, 'Alvaro', '12234', 2)";
    // $resultado = $mysqli -> query($query) or die ($mysqli -> error);

    $mysqli -> query("DELETE FROM usuarios WHERE nombre LIKE 'Alvaro';") or die ($mysqli -> error);

    $query = "SELECT * FROM usuarios";
    $resultado = $mysqli -> query($query) or die ($mysqli -> error);
    $numregistros=$resultado -> num_rows;
    echo "<p>El número de clientes con nombre Empresa* es: ",$numregistros,".</p>";
    
    while ($registro = $resultado -> fetch_assoc()) {
        echo "<tr>";
        foreach ($registro as $campo)
        echo "<td>",$campo, " </td>";
        echo "</tr>";
        echo "<br/>";
    }

    
    

?>