<?php
$fp = fopen("fichero_ejemplo.txt", "w");
fwrite($fp,"1");
fwrite($fp,"267");
fclose($fp);