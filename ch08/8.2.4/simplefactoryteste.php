<?php
require_once("SimpleFactoryMoeda.class.php");
$real = SimpleFactoryMoeda::criaInstanciaMoeda(SimpleFactoryMoeda::BRASIL_MOEDA_REAL);
$libra = SimpleFactoryMoeda::criaInstanciaMoeda(SimpleFactoryMoeda::INGLATERRA_MOEDA_LIBRA_ESTERLINA);

echo "Converver R$ 100,00 em libras com fator de 1.25\n";
echo "Total de Libras: " . $libra->getSimboloMonetario() . " ";
echo $libra->converterMoeda(100, 1.25, Moeda::OPERACAO_DIVISAO);
echo "\n\n";
echo "Converter £$ 80 em Reais com fator de 1.25\n";
echo "Total de Reais: " . $real->getSimboloMonetario() . " ";
echo $real->converterMoeda(80, 1.25, Moeda::OPERACAO_MULTIPLICACAO);
echo "\n";

?>