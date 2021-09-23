<?php

function trata_excecao($e)
{
    echo 'Tratamento de exceção especial: ' . $e->getMessage();
}

class ExceptionDB extends Exception { /* */ }
class ExceptionArquivo extends Exception { /* */ }

set_exception_handler('trata_excecao');

try {
    // forçar o lançamento da exceção da classe ExceptionArquivo
    // não existe um tratamento adequado a ela dentro destre bloco try...catch
    throw new ExceptionArquivo("Erro ao acesso do arquivo!\n");
} catch (ExceptionDB $e) {
    // Tratamento de exeções de banco de dados
    echo 'exceção DB: ' . $e->getMessage();
} 
?>