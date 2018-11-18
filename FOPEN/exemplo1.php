<?php
//https://www.w3schools.com/php/func_filesystem_fopen.asp
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s". "\r\n"));

fclose($file);

?>