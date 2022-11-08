<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa','root', '');
    // $ins = 'INSERT into antiguos_empleados values (5 , "Fernando")';
    // $mbd -> query($ins);
    // echo "Se ha insertado un valor de prueba";



    }catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    try {
        $mbd -> beginTransaction();
        
        $mbd -> exec('INSERT into antiguos_empleados values (1,"Nico")');
        $mbd -> exec('DELETE from empleados where ID = 3');
        //si hubiera ido bien...
        $mbd -> commit();
        echo "Se ha hecho un commit";
        

    } catch (\Throwable $th) {
        echo "Error: " . print_r($mbd -> errorInfo());
        //Deshace el primer cambio
        $mbd -> rollBack();
        echo "<br>Transaccion anulada <br>";
    }


?>