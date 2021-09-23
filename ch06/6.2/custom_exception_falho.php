<?php

class ExceptionDB extends Exception { /* */ }
class ExceptionArquivo extends Exception { /* */ }

function executa_algo($num)
{
    return $num >= 0;
}



try {
   // forçar o lançamento da exceção da classe ExceptionArquivo
    throw new ExceptionArquivo("Erro de acesso ao arquivo!\n");
    
} catch (Exception $e) {
    // Tratamento de outras exceções genéricas
    echo 'exceção genérica: ' . $e->getMessage();
}
catch (ExceptionDB $e) {
    // nunca entrará aqui
    echo 'exceção DB: ' . $e->getMessage();
} catch (ExceptionArquivo $e){
    // nunca entrará aqui
    echo 'exceção i/o: ' . $e->getMessage();
} 
?>