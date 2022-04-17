<?php
require_once("Produto.class.php");
abstract class Pedido {
    protected $produtos = array();
    protected $valorPedido = 0;

    public abstract function calculaTotal();
    
    public function adicionaProduto(Produto $produto)
    {
        $this->produtos[$produto->getCodigo()] = $produto;
    }

    public function removeProduto($chave)
    {
        unset($this->produtos[$chave]);
    }
}
?>