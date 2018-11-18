<?php

if(!is_dir("imagens")){ 
	mkdir("images");
}

foreach (scandir("imagens") as $item) {
	if(!in_array($item ,array(".",".."))){
		unlink("imagens/".$item);
	}

}

?>