<?php

class Log {
    protected $arquivo;

    public function __construct()
    {
        $this->arquivo = fopen('log2.txt', 'a');
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

// Caso 2: imprime "construtor, destrutor, construtor, destrutor" no arquivo log.txt
$reg3 = new Log();
unset($reg3);
$reg4 = new Log();

?>