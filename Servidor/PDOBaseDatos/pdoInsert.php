<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa','root', '');
    echo "Conexion realiada con exito <br>";



}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    echo "No se ha podido conectar con la base de datos";
    die();
}

//Por marcadores
/*
try {
    $sentencia = $mbd -> prepare('INSERT into usuarios(Codigo,Nombre,Clave,Rol) values ("",:nombre,:clave,:rol)');
    $sentencia -> bindParam(':nombre', $nombre);
    $sentencia -> bindParam(':clave', $clave);
    $sentencia -> bindParam(':rol', $rol);

    //Insertar una fila
    $nombre = 'Jose Luis';
    $clave = '1234';
    $rol = 2;

    $sentencia -> execute();

} catch (\Throwable $th) {
    //throw $th;
    echo "Error.";
}
*/

//Por marcadores posicionales

try {
    $sentencia = $mbd -> prepare('INSERT into usuarios(Codigo,Nombre,Clave,Rol) values ("",?,?,?)');
    $sentencia -> bindParam(1, $nombre);
    $sentencia -> bindParam(2, $clave);
    $sentencia -> bindParam(3, $rol);

    //Insertar una fila
    $nombre = 'Carmen';
    $clave = '5678';
    $rol = 2;

    $sentencia -> execute();

} catch (\Throwable $th) {
    //throw $th;
    echo "Error.";
}

//

try {
    $sentencia = $mbd -> prepare('SELECT * from usuarios where Rol = ?');
    if($sentencia -> execute(array($_GET['Rol']))){
        while ($fila = $sentencia -> fetch()) {
            echo "<pre>";
            print_r($fila);
        }
    }

} catch (\Throwable $th) {
    //throw $th;
    echo "Error.";
}
?>