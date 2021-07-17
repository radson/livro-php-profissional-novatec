<?php   
class Obj 
{
    public function __construct($nome)
    {
        echo "Construindo '$nome'";
    }
}

// A proxima linha executa o metodo construtor, imprime "Construindo 'a' "
$a = new Obj('a');

// As proximas linhas não executam o método construtor
$b = $a;
$c = clone $a;


?>