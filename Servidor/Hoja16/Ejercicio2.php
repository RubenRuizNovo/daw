<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        echo "ID: " . session_id() . "Nombre Sesion: " . session_name();
        header("Location: mod_sesion.php");
        
    }
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			Usuario
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">							
			Correo			
			<input id = "mail" name = "mail" type = "email">						
			<input type = "submit">
		</form>
</body>
</html>