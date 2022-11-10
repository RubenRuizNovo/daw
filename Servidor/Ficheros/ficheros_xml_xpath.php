<?php
echo "<pre>";
	$datos = simplexml_load_file("fichero_xml.xml");	
	$edades = $datos->xpath("//cif");
	foreach($edades as $valor){
		print_r($valor);
		echo "<br>";
	}