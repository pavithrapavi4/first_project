<?php

$var=fopen("demo.php","r");

fread($var,filesize("demo.php"));

fclose($var);

?>













