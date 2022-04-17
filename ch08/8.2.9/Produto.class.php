<?php
class Produto  
{
    private $preco;
    private $codigo;

    public function __construct($codigo, $preco)
    {
        $this->setCodigo($codigo);
        $this->setPreco($preco);
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        return $this->preco = $preco;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
}

?>