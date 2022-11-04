<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registro = ["user1" => "user1", "user2" => "user2", "user3" => "user4"];
    $usuario = $_POST["usuario"];
    $pasw = $_POST["contraseña"];
    $flag = false;

    foreach ($registro as $key => $value) {
        
        if ($key == $usuario && $value == $pasw) {
            $flag = true;
        }
    }

    if ($flag == true) {
        echo "Contraseña correcta.";
        header("Location: bienvenido.php");
    }else{
        echo "<h1>Contraseña incorrecta.</h1>";
    }
}

?>