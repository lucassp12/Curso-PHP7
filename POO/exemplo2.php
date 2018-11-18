<?php
	
	class Carro{
		private $modelo;
		private $motor;
		private $ano;

		//Metodos Modelo
		public function getModelo(){

			return $this->modelo;

		}
		public function setModelo($modelo){

			$this->modelo = $modelo;

		}// fim metodos modelo

		//Metodos Motor
		public function getMotor():float{

			return $this->motor;

		}
		public function setMotor($motor){

			$this->motor = $motor;

		}//Fim metodos Motor

		//Metodos Ano
		public function getAno():int{

		return $this->ano;

		}
		public function setAno($ano){

			$this->ano = $ano;

		}//Fim metodos ano

		public function exibir(){

			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano" => $this->getAno()
			);
		}



	}

$gol = new Carro();
$gol->setModelo("Gol TSI");
$gol->setMotor("2.0");
$gol->setAno("2018");

var_dump($gol->exibir());


?>