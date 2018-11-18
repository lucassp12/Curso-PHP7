<?php

$nome1 = "Lucas";
$sobre = "Santos";
$nomeCompleto = $nome1 . " " . $sobre;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";
//unset($nomeCompleto);

if (isset($nome1)) {

	echo $nome1;
}

?>