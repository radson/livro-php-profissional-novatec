<?php
require_once("CalculoValores.class.php");
require_once("FormaPagamento.class.php");

abstract class PedidoAdapter extends Pedido implements CalculoValores {
    protected $valorDesc = 0;
    protected $valorAcresc = 0;
    protected $forma;

    protected function __construct(FormaPagamento $forma){
        $this->forma = $forma;
    }

    public abstract function getDesconto();
    protected abstract function setDesconto($valorDesc);
    public abstract function getAcrescimo();
    protected abstract function setAcrescimo($valorAcresc);
    public abstract function getForma();
}
?>