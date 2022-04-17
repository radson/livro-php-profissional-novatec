<?php
require_once("FormaPagamento.class.php");

interface CalculoValores {
    public function calculaTotalBruto();
    public function calculaTotalFinal(FormaPagamento $forma = null);
    public function calculaTotalLiquido($valorDesc = 0, $valorAcresc = 0);
}
?>