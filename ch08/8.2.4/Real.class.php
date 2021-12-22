<?php
require_once('Moeda.class.php');

class Real extends Moeda 
{
    const VALOR_SEPARADOR_DECIMAL = ",";
    const VALOR_SEPARADOR_MILHAR = ".";
    const SIMBOLO_MONETARIO = "R\$";

    public function __construct()
    {
        parent::__construct(Real::VALOR_SEPARADOR_DECIMAL, Real::VALOR_SEPARADOR_MILHAR, Real::SIMBOLO_MONETARIO);
    }
}

?>