<?php

abstract class Animal{
	public function falar(){
		return "Som";
	}

	public function mover(){
		return "anda";
	}
}
class Cachorro extends Animal{
	public function falar(){
		return "late";
	}


}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}
class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}
	public function mover(){
		return "voa e ".parent::mover();
	}
}
$pluto = new Cachorro();
echo $pluto->falar();
echo "<br>";
echo $pluto->mover();
echo "<hr>";

$garfield = new Gato();
echo $garfield->falar();
echo "<br>";
echo $garfield->mover();
echo "<hr>";

$piu = new Passaro();
echo $piu->falar();
echo "<br>";
echo $piu->mover();
echo "<hr>";

?>