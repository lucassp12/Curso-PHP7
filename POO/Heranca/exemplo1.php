<?php

class Documento{
	private $numero;


    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

    }
}

class CPF extends Documento{

	public function validar():bool{
		$numero = $this->getNumero();
		//validacao cpf
		return true;
	}
}
class CNPJ extends Documento{
	public function validar():bool{
		$numero = $this->getNumero();

		return true;
	}
}

$doc = new CPF();

$doc->setNumero('111111111-11');
var_dump($doc-> validar());

echo "<br />";

echo $doc->getNumero();

echo "<br />";

echo "<hr />";

$doc = new CNPJ();

$doc->setNumero('12.482.313/0001-02');
var_dump($doc-> validar());

echo "<br />";

echo $doc->getNumero();

?>