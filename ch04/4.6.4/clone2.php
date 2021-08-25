<?php
class Obj  
{
    public $tipo;
    
    public function __construct()
    {
        $this->tipo = "original\n";
    }

    public function __clone()
    {
        $this->tipo = "clone\n";
    }
}

$a = new Obj();
$b = clone $a;

echo $a->tipo; // imprime original
echo $b->tipo; // imprime clone

?>