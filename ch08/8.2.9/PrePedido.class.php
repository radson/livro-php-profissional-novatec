<?php
require_once("Pedido.class.php");

class PrePedido extends Pedido
{
    public function calculaTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }
}


?>