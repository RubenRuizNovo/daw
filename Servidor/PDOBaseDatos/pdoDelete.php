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

    $sentencia = $mbd -> prepare('DELETE from usuarios where Nombre = ?');
    $sentencia -> bindParam(1, $nombre);
    $sentencia -> execute();

    echo "ELIMINADO";

} catch (\Throwable $th) {
    //throw $th;
    echo "Error.";
}
?>