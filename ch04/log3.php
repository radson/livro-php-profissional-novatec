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

class LogUser extends Log {
    public function __construct()
    {
        // Chamada explicita do construtor da superclasse 'log'
        parent::__construct();
        $this->escrever('construtor LogUser');
    }
}

// imprime também construtor LogUser no arquivo log.txt
$registro = new LogUser();
?>