<?php


interface veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements veiculo{

	public function acelerar($velocidade){

		echo "O veiculo acelerou até: ".$velocidade." KM/H";
	}

	public function frenar($velocidade){

		echo "O veiculo frenou até: ".$velocidade." KM/H";
	}

	public function trocarMarcha($marcha){

		echo "O veiculo engatou a marcha: ".$marcha;
	}

}

class DelRey extends Automovel{

	public function empurrar(){

	}
}

$carro = new DelRey();
$carro->acelerar(200);
?>