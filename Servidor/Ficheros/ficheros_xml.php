<?php
// El fichero test.xml contiene un documento XML con un elemento raíz y, al
// menos, un elemento /[raiz]/titulo.
echo "<pre>";
if (file_exists('fichero_xml.xml')) {
    $xml = simplexml_load_file('fichero_xml.xml');
 
    print_r($xml);
} else {
    exit('Error abriendo fichero_xml.xml.');
}
?>