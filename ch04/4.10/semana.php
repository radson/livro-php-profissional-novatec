<?php

class Calendario 
{
    const NOME = "Classe Calendário";
}

class DiasDaSemana extends Calendario
{
    const DOMINGO = "Domingo";
    const SEGUNDA_FEIRA = "Segunda-Feira";
    const TERCA_FEIRA = "Terça-Feira";
    const QUARTA_FEIRA = "Quarta-Feira";
    const QUINTA_FEIRA = "Quinta-Feira";
    const SEXTA_FEIRA = "Sexta-Feira";
    const SABADO = "Sábado";
    const NOME = "Classe DiasDaSemana";
    const TOTAL_DE_DIAS = 7;

    static $instancias = 0;

    private function __construct()
    {
        self::$instancias++;
    }

    public static function geraInstancia()
    {
        new self();
    }

    public static function imprimeConstantesNome()
    {
        return "A ".self::NOME." estende da ".parent::NOME."\n";
    }
}

for ($i=0; $i < 10; $i++) { 
    DiasDaSemana::geraInstancia();
}

echo "Total de objetos da classe DiasDaSemana criados: ".DiasDaSemana::$instancias."\n";
echo "Hoje é ".DiasDaSemana::DOMINGO."\n";
echo "A semana tem um total de dias no valor de ".DiasDaSemana::TOTAL_DE_DIAS."\n";
echo DiasDaSemana::imprimeConstantesNome();

?>