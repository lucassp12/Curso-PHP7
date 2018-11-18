<?php
function __autoload($nomeClass){
	$dirClass = "class";
	$filename = $dirClass. DIRECTORY_SEPARATOR .$nomeClass.".php";

	if (file_exists($filename)){
		require_once($filename);

	}
}

?>