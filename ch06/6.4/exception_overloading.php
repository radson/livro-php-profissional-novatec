<?php

class ExceptionDB extends Exception 
{
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function __construct($message, $code)
    {
        // codigo especial para o construtor - chamada do consgtrutor da superclasse
        parent::__construct($message, $code);
    }
}

?>