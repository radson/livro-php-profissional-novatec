<?php

class Moeda  
{
    private $separadorDecimal;
    private $separadorMilhar;
    private $simboloMonetario;
    const OPERACAO_MULTIPLICACAO = "M";
    const OPERACAO_DIVISAO = "D";

    public function __construct($separadorDecimal, $separadorMilhar, $simboloMonetario)
    {
        $this->setSeparadorDecimal($separadorDecimal);
        $this->setSeparadorMilhar($separadorMilhar);
        $this->setSimboloMonetario($simboloMonetario);
    }

    public function converteMoeda($valorBase, $fatorConversao, $operacao)
    {
        $valorfinal = 0;
        if ($operacao == Moeda::OPERACAO_DIVISAO) {
            $valorfinal = $valorBase / $fatorConversao;
        } elseif ($operacao == Moeda::OPERACAO_MULTIPLICACAO) {
            $valorfinal = $valorBase * $fatorConversao;
        }
        return $valorfinal;
    }

    public function getSeparadorDecimal()
    {
        return $this->separadorDecimal;
    }

    public function setSeparadorDecimal($separadorDecimal)
    {
        $this->separadorDecimal = $separadorDecimal;
    }

    public function getSeparadorMilhar()
    {
        return $this->separadorMilhar;
    }

    public function setSeparadorMilhar($separadorMilhar)
    {
        $this->separadorMilhar = $separadorMilhar;
    }

    public function getSimboloMonetario()
    {
        return $this->simboloMonetario;
    }

    public function setSimboloMonetario($simboloMonetario)
    {
        $this->simboloMonetario = $simboloMonetario;
    }
}

?>