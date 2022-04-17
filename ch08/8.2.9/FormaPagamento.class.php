<?php
class FormaPagamento  
{
    private $descricao;
    private $taxa;

    public function __construct($descricao, $taxa)
    {
        $this->descricao = $descricao;
        $this->taxa = $taxa;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setTaxa($taxa)
    {
        $this->taxa = $taxa;
    }

    public function getTaxa()
    {
        return $this->taxa;
    }
}

?>