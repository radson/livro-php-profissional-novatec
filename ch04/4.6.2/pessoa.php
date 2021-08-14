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
}

$usuario = new Pessoa();

// atributo 'nome' não existe na classe, então o método __set será invocado para tratar esta atribuição
$usuario->nome = 'João';

// método __get será invocado para recuperar o valor do atributo que não existe na classe
echo "Nome: $usuario->nome\n";
echo "Idade: $usuario->idade\n";

?>