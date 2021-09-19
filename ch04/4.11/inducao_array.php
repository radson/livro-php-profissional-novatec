<?php

function contar_palavras(array $lista)
{
    // $lista só pode ser do tipo array!
    return count($lista);
}

$palavras = array('a', 'b', 'c');
echo contar_palavras($palavras);
echo "\n";
// erro fatal!
$palavras = 'a';
echo contar_palavras($palavras);
echo "\n";

?>