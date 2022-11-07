<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa','root', '');
    echo"<pre>";
    foreach($mbd->query('SELECT * from usuarios') as $fila) {
        print_r($fila);
    }
    /*
    //Insertar una nueva fila(Codigo,nombre,clave,rol)

    $resul = $mbd ->query("insert into usuarios(codigo,nombre,clave,rol) values ('', 'Rosalia', '', '')");
    if ($resul) {
        echo "La consulta se ha realizado correctamente";
        echo "Filas insertadas: " . $resul->rowCount()."<br>";
    }else print_r($mbd -> errorinfo());
    //para los autoincrementos
    echo "Codigo de la fila insertada." . $mbd->lastInsertId()."<br>";

    //actualizar
    $li = $mbd -> lastInsertId();
    echo "LI es: $li";
    $upd = 'update usuarios set rol = 2 where codigo =' . $li . "";
    $resul = $mbd -> query($upd);

    //Comprobar errores

    if ($resul) {
        echo "update correcto <br>";
        echo "Filas actualizadas: " . $resul->rowCount()."<br>";
    }
    
    //update rol = 2
    $upd = 'update usuarios set rol = 1 where rol = 2';
    $resul = $mbd -> query($upd);

    //Comprobar errores

    if ($resul) {
        echo "update correcto <br>";
        echo "Filas actualizadas: " . $resul->rowCount()."<br>";
    }

    //borar fila
    $del = 'delete from usuarios where rol = 0';
    $resul = $mbd -> query($del);

    //Comprobar errores

    if ($resul) {
        echo "borrado correcto <br>";
        echo "Filas borradas: " . $resul->rowCount()."<br>";
    }else print_r($mbd -> errorInfo());

    */
    $mbd -> beginTransaction();
    $ins = 'INSERT into usuarios(codigo,nombre,clave,rol) values ("" , "Fernando", "3333", "1")';
    $resul = $mbd -> query($ins);
    
    //Se repite la consulta
    //falla porque el nombre es unique

    $resul = $mbd -> query($ins);
    if (!$resul) {
        echo "Error: " . print_r($mbd -> errorInfo());
        //Deshace el primer cambio
        $mbd -> rollBack();
        echo "<br>Transaccion anulada <br>";
    }else{
        //si hubiera ido bien...
        $mbd -> commit();
    }


    }catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }


?>