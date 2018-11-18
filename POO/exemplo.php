<?php
	
	class Carro{
		private $modelo;
		private $motor;
		private $ano;
	
    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     *
     * @return self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     *
     * @return self
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }
}


?>