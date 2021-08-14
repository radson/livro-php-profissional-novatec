<?php

class Log {
    protected $arquivo;

    public function __construct()
    {
        $this->arquivo = fopen('log1.txt', 'a');
        $this->escrever('construtor');
    }

    public function __destruct()
    {
        $this->escrever('destrutor');
        fclose($this->arquivo);
    }

    public function escrever($msg)
    {
        fwrite($this->arquivo, $msg . ',');
    }
}

// Caso 1: imprime "construtor, construtor, destrutor, destrutor" no arquivo log.txt
$reg1 = new Log();
$reg2 = new Log();

?>