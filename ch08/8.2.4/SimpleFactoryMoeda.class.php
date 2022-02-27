<?php
require_once('Real.class.php');
require_once('LibraEsterlina.class.php');

final class SimpleFactoryMoeda  
{
    const BRASIL_MOEDA_REAL = "REAL";
    const INGLATERRA_MOEDA_LIBRA_ESTERLINA = "LIBRA_ESTERLINA";
    private static $moeda;

    public static function criaInstanciaMoeda($moeda)
    {
        switch ($moeda) {
            case self::BRASIL_MOEDA_REAL:
                self::setMoeda(new Real());
                break;
            case self::INGLATERRA_MOEDA_LIBRA_ESTERLINA:
                self::setMoeda(new LibraEsterlina());
                break;
            default:
                throw new Exception ("Tipo especificado de moeda não existe. Moeda: ". $moeda);
        }
        return self::getMoeda();
    }

    private static function getMoeda()
    {
        return self::$moeda;
    }

    private static function setMoeda($moeda)
    {
        self::$moeda = $moeda;
    }
}

?>