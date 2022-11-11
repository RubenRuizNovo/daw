<?php
$fp = fopen("fichero_ejemplo.txt", "w");
fwrite($fp,"1");
fwrite($fp,"2670");
fclose($fp);