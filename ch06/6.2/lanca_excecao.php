<?php

function executa_algo($num)
{
    return $num >= 0;
}

try {
    // conteúdo de $cod será falso
    $cod = executa_algo(-10);
    if($cod === false) {
        throw new Exception("Problemas foram detectados!\n");
    }
} catch (Exception $e) {
    // imprime erro na tela
    echo $e->getMessage();
}
?>