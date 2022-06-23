<?php
require_once("Observador.class.php");

class Observado  
{
    private $observadores;
    private $estado;

    public function __construct()
    {
        $this->setObservadores(array());
    }

    private function getObservadores()
    {
        return $this->observadores;
    }

    private function setObservadores($observadores)
    {
        $this->observadores = $observadores;
    }

    public function adicionaObservador(Observador $observador)
    {
        $observadoresaux = $this->getObservadores();
        $observadoresaux[] = $observador;
        $this->setObservadores($observadoresaux);
    }

    public function removeObservador($chave)
    {
        if (count($this->getObservadores()) > 0) {
            if (array_key_exists($chave, $this->getObservadores())) {
                $observadoresaux = $this->getObservadores();
                unset($observadoresaux[$chave]);
                $this->setObservadores($observadoresaux);
            } else {
                throw new Exception("Não foi possível remover observador, chave não existe.");
            }
        }
    }

    public function notificaObservadores()
    {
        $tamanho = count($this->getObservadores());
        for ($i=0; $i < $tamanho; $i++) { 
            $aux = $this->getObservadores();
            $aux[$i]->atualizar();
        }
    }

    public function getEstado()
    {
        return $this->str_estado;
    }

    public function setEstado($str_estado)
    {
        $this->str_estado = $str_estado;
    }
}

?>