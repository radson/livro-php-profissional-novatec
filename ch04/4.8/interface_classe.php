<?php
require_once('IVeiculo.class.php');

class Veiculo implements IVeiculo
{
    static protected $velocidade_max = 200;
    private $velocidade;

    public function acelerar($incr = 1)
    {
        return $this->alterar_velocidade($incr);
    }

    public function frear($decr = 1)
    {
        return $this->alterar_velocidade(-$decr);
    }

    protected function alterar_velocidade($diff)
    {
        $nova_velocidade = $this->velocidade + $diff;
        if ($nova_velocidade > veiculo::$velocidade_max ||
        $nova_velocidade < 0) {
            return false;
        }

        $this->velocidade = $nova_velocidade;
        return true;
    }

    public function verificar_velocidade()
    {
        return $this->velocidade;
    }
}

class Veiculo2 implements IVeiculo
{
    function acelerar($incr=1)
    {
        // codificação do método "acelerar"
    }

    function frear($decr=1)
    {
        // codificação do método "frear"
    }

    function verificar_velocidade()
    {
        // codificação do método "verificar_velocidade"
    }
}



?>