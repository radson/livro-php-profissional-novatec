<?php

function executa_algo($num)
{
    return $num >= 0;
}

class ExceptionDB extends Exception { /* */ }
class ExceptionArquivo extends Exception { /* */ }

try {
    // conteúdo de $cod será falso
    $cod = executa_algo(-10);
    if($cod === false) {
        throw new Exception("Problemas foram detectados!\n");
    }
} catch (ExceptionDB $e) {
    // Tratamento de exeções de banco de dados
    echo 'exceção DB: ' . $e->getMessage();
} catch (ExceptionArquivo $e){
    // Tratamento de exceções de i/o de arquivos
    echo 'exceção i/o: ' . $e->getMessage();
} catch (Exception $e) {
    // Tratamento de outras exceções genéricas
    echo 'exceção genérica: ' . $e->getMessage();
}
?>