<?php

class Veiculo {
    public $cor;
    static protected $velocidade_max = 200;
    private $velocidade;

    public function __construct(){
        $this->velocidade = 0;
    }

    public function acelerar($incr = 1){
        return $this->alterar_velocidade($incr);
    }

    public function frear($decr = 1)
    {
        return $this->alterar_velocidade(-$decr);
    }

    protected function alterar_velocidade($diff)
    {
        $nova_velocidade = $this->velocidade + $diff;
        if ($nova_velocidade > veiculo::$velocidade_max || $nova_velocidade < 0) {
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

?>