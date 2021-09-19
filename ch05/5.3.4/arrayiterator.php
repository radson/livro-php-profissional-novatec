<?php

$array = array("a" => "Abril", "Maio", "3" => "Julho");
$arrayObjeto = new ArrayObject($array);
$iterator = $arrayObjeto->getIterator();

while ($iterator->valid()) {
    echo("Chave: " . $iterator->key() . " => " . "Valor: " . $iterator->current() . "\n");
    $iterator->next();
}

echo("Total de objetos: " . $arrayObjeto->count() . "\n");

?>