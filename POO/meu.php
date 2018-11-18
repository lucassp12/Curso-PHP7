<?php

class Pessoa{
	private $nome;
	private $idade;
	private $sexo;

	public function getNome(){
		return $this->nome;
	}

	public function getIdade():Int{
		return $this->idade;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	public function exibir(){
		return "O nome é: ".$this->nome." Idade: ".$this->idade." Sexo: ".$this->sexo;
	}


}

$pessoa = new Pessoa();
$pessoa->setNome("João");
$pessoa->setIdade(18);
$pessoa->setSexo("Masculino");

echo $pessoa->exibir();


?>