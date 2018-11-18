<?php 

include "inc/exemplo.php"; // Tenta Funcionar mesmo que o arquivo não exista e mostras os erros. Permite url com include.
require "inc/exemplo.php"; // Obriga o arquivo exista e funcione direito, causa um erro fatal.
require_once "inc/exemplo.php"; // once para incluir apenas uma vez e não dar erros de chamar a mesma função 2 vezes.
$resultado = somar(10, 20);


echo $resultado;

 ?>