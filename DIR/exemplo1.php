<?php
$name = "imagens";

if(!is_dir($name)){
	mkdir($name);
	echo "Diretorio $name criado com sucesso";
}else{
	//rmdir($name); remove diretorio
	echo "Já existe o diretório: $name";
}
?>