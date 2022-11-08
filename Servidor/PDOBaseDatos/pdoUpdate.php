<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa','root', '');
    echo "Conexion realiada con exito <br>";



}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    echo "No se ha podido conectar con la base de datos";
    die();
}

try {
    $nombre = 'Carmen';
    $new_clave = 'APA';

    $sentencia = $mbd -> prepare('UPDATE usuarios SET Clave = ? where Nombre = ?');
    $sentencia -> bindParam(1, $new_clave);
    $sentencia -> bindParam(2, $nombre);
    $sentencia -> execute();

    echo "ACTUALIZADO";

} catch (\Throwable $th) {
    //throw $th;
    echo "Error.";
}
?>