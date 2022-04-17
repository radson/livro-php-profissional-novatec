<?php
require_once("PedidoAdapter.class.php");
require_once("FormaPagamento.class.php");

class PedidoWeb extends PedidoAdapter 
{
    public function __construct(FormaPagamento $forma)
    {
        if ($forma == null) {
            throw new Exception("Não foi informada a forma de pagamento.");
        } else {
            parent::__construct($forma);
        }
        
    }

    public function calculaTotal()
    {
        throw new Exception("Método calculaTotal obsoleto, usar o calculaTotalBruto");
    }

    public function calculaTotalBruto()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }

    public function calculaTotalLiquido($valorDesc = 0, $valorAcresc = 0)
    {
        $total = 0;
        $this->setDesconto($valorDesc);
        $this->setAcrescimo($valorAcresc);
        $total = $this->calculaTotalBruto();
        $total = ($total + $valorAcresc) - $valorDesc;
        $this->valorPedido = $total;
        return $total;
    }

    public function calculaTotalFinal(FormaPagamento $forma = null)
    {
        $total = 0;
        if ($this->getForma() != null) {
            $total = $this->valorPedido + $this->getForma()->getTaxa();
        } else if ($forma != null) {
            $total = $this->valorPedido + $forma->getTaxa();
        }
        $this->valorPedido = $total;
        return $total;
    }

    public function getDesconto()
    {
        return $this->valorDesc;
    }

    protected function setDesconto($valorDesc)
    {
        $this->valorDesc = $valorDesc;
    }

    public function getAcrescimo()
    {
        return $this->valorAcresc;
    }

    protected function setAcrescimo($valorAcresc){
        $this->valorAcresc = $valorAcresc;
    }

    public function getForma()
    {
        return $this->forma;
    }

}


?>