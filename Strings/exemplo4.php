<?php 

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); // procura a palavra na frase

$texto = substr($frase, 0, $q);  // mostra a frase até a posição escolhida 

var_dump($texto);

echo "<br>";

$texto1 = substr($frase, $q + strlen($palavra), strlen($frase));

echo $texto1;



 ?>