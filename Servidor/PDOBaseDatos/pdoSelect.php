<?php
$cadena_conexion = 'mysql:dbname=empresa:host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa','root', '');
    echo "Conexion realiada con exito <br>";



}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    echo "No se ha podido conectar con la base de datos";
    die();
}
try {
    $sql = 'SELECT Codigo,Nombre,Clave,Rol from usuarios';
    $usuarios = $mbd -> query($sql);
    echo "Numero de usuarios : " . $usuarios->rowCount() . "<br>";
    foreach ($usuarios as $usu) {
        print "Nombre: ". $usu['Nombre'];
        print " | Clave: " . $usu['Clave'] . "<br>";
    }
    echo "<br>";

    //Consulta preparada por rol

    $preparada = $mbd->prepare('SELECT Nombre from usuarios where rol = ?');
    $preparada->execute(array(1));

    echo "Usuarios con rol 1: " . $preparada->rowCount() . "<br>";

    foreach ($preparada as $prep) {
        print "Nombre: ". $prep['Nombre'] . "<br>";
    }
    echo "<br>";

    //Consulta preparada, parametros por nombre
    
    $preparada_nombre = $mbd->prepare('SELECT Nombre from usuarios where rol = :rol');
    $preparada_nombre->execute(array(':rol' => 1));

    echo "Usuarios con EL ROL 1: " . $preparada_nombre->rowCount(). "<br>";
    foreach ($preparada_nombre as $usu) {
        print "Nombre: ". $usu['Nombre'] . "<br>";
    }

} catch (\Throwable $th) {
    //throw $th;
    echo "Error.";
}
?>