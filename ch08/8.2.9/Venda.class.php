<?php
require_once("CalculoValores.class.php");
require_once("Pedido.class.php");
require_once("FormaPagamento.class.php");

class Venda implements CalculoValores
{
    private $pedido;
    private $forma;

    public function __construct(Pedido $pedido, FormaPagamento $forma = null)
    {
        if ($pedido == null) {
            throw new Exception("Venda sem pedido informado.");
            
        }

        $this->pedido = $pedido;
        $this->forma = $forma;
    }

    public function calculaTotalBruto()
    {
        return $this->pedido->calculaTotalBruto();
    }

    public function calculaTotalFinal(FormaPagamento $forma = null)
    {
        $total = 0;
        if ($this->getForma() != null) {
            $total = $this->pedido->calculaTotalFinal($this->getForma());
        } else if ($forma != null) {
            $total = $this->pedido->calculaTotalFinal($forma);
        } else {
            $total = $this->pedido->calculaTotalFinal();
        }

        $this->valorPedido = $total;
        return $total;
        
    }

    public function calculaTotalLiquido($valorDesc = 0, $valorAcresc = 0)
    {
        if ($valorDesc == 0) {
            if ($valorAcresc == 0) {
                return $this->pedido->calculaTotalLiquido($this->pedido->getDesconto(), $this->pedido->getAcrescimo());
            } else {
                return $this->pedido->calculaTotalLiquido($this->pedido()->getDesconto(), $valorAcresc);
            }
        } elseif ($valorAcresc == 0) {
            return $this->pedido->calculaTotalLiquido($valorDesc, $this->pedido()->getAcrescimo());
        } else {
            return $this->pedido->calculaTotalLiquido($valorDesc, $valorAcresc);
        }
    }

    public function getForma()
    {
        if ($this->forma != null) {
            return $this->forma;
        } else {
            return $this->pedido->getForma();
        }
    }

    public function setForma($forma)
    {
        $this->forma = $forma;
    }

    public function getPedido()
    {
        return $this->pedido;
    }
}

?>