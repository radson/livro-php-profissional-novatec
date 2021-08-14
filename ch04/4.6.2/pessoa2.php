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

    // método __call acrescentado na classe pessoa
    public function __call($metodo, $params)
    {
        echo "msg: __call($metodo,".serialize($params).")\n";
        $status = true;
        switch ($metodo) {
            case 'limpar':
                $this->info['nome'] = '';
                $this->info['endereco'] = '';
                break;
            
            case 'preencher':
                $this->info['nome'] = $params[0];
                $this->info['endereco'] = $params[1];
                break;
            default:
                $status = false;
                break;
        }
        return $status;
    }
}

// testes com a nova classe pessoa - chamada de pseudométodos, que serão tratados via __call
// repare que como o método __call foi implementado para retornar um valor booleano,
// que indica sucesso ou não da operação, podemos inclusive testar esta condição após a 
// execução do método

$usuario = new Pessoa();

// metodo preencher
if ($usuario->preencher('José', 'Av. Regente, 100')) {
    echo "Preenchimento realizado\n";
    echo "Nome: $usuario->nome Endereço: $usuario->endereco\n";
}

// metodo limpar
if ($usuario->limpar()) {
    echo "Registro removido\n";
    echo "Nome: $usuario->nome Endereço: $usuario->endereco\n";
}

?>