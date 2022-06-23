<?php
require_once("Observado.class.php");

abstract class Observador  
{
    private $observado;

    public function __construct(Observado $observado)
    {
        $this->setObservado($observado);
        $observado->adicionaObservador($this);
    }

    public abstract function atualizar();
    
    public function getObservado()
    {
        return $this->observado;
    }

    public function setObservado($observado)
    {
        $this->observado = $observado;
    }
}

?>