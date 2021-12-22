<?php
require_once('Moeda.class.php');

class LibraEsterlina extends Moeda 
{
    const VALOR_SEPARADOR_DECIMAL = ".";
    const VALOR_SEPARADOR_MILHAR = ",";
    const SIMBOLO_MONETARIO = "£\$";

    public function __construct()
    {
        parent::__construct(LibraEsterlina::VALOR_SEPARADOR_DECIMAL, LibraEsterlina::VALOR_SEPARADOR_MILHAR, LibraEsterlina::SIMBOLO_MONETARIO);
    }
}

?>