<?php

$file = fopen("test.txt", "w+");
fclose($file);

unlink("test.txt");

?>