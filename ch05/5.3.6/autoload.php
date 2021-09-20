<?php

function __autoload($nome_classe)
{
    require_once $nome_classe . ".class.php";
}

$classe1 = new ClassePrimeira();
$classe2 = new ClasseSegunda();

?>