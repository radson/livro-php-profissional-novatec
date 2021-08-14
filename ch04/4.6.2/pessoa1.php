<?php  

class Pessoa 
{
    // $info é o único atributo explicitamente declarado

    private $info = array();

    public function __set($campo, $valor)
    {
        echo "msg: __set($campo, $valor)\n";
        $this->info[$campo] = $valor;
    }

    public function __get($campo)
    {
        echo "msg: __get($campo)\n";
        if (isset($this->info[$campo])) {
            return $this->info[$campo];
        } else {
            return "Campo $campo não tem conteúdo\n";
        }
    }

    // método __isset e __unset acrescentados na classe Pessoa
    public function __isset($campo)
    {
        echo "msg: __isset($campo)\n";
        return isset($this->info[$campo]);
    }

    public function __unset($campo)
    {
        echo "msg: __unset($campo)\n";
        unset($this->info[$campo]);
    }
}


// teste com a nova classe Pessoa - o valor atribuído ao atributo 'endereço' será tratado via __set
$usuario = new Pessoa();

$usuario->endereco = 'Rua XYZ, 10';

// teste de existência deste valor - repare que este laço é executado 2 vezes
// na primeira iteração, o atributo 'endereço' existe e logo em seguida é removido com
// unset na segunda repetição, ele comprova sua remoção

for ($i=0; $i < 2; $i++) { 
    if (isset($usuario->endereco)) {
        echo "Endereço: ".$usuario->endereco."\n";
    } else {
        echo "Endereço inexistente\n";
    }
    unset($usuario->endereco);
}

?>