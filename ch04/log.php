<?php

class Log {
    protected $arquivo;

    public function __construct()
    {
        $this->arquivo = fopen('log.txt', 'a');
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

// imprime construtor, destrutor no arquivo log.txt
$registro = new Log();
?>