<?php

require_once("config.php");
$cad = new Cadastro();
$cad->setNome("Djalma Sindaux");
$cad->setEmail("djalma@hcado.com.br");
$cad->setSenha("123456");

echo $cad;
?>