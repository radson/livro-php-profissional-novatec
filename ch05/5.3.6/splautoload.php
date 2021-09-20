<?php

class Carregador  
{
    public static function carrega($classe)
    {
        spl_autoload_extensions(".class.php");
        // O nome arquivo da classe deve ser todo em minúsculo
        spl_autoload($classe);
    }
    
}

spl_autoload_register(array("Carregador", "carrega"));

$classe3 = new ClasseTerceira();

?>