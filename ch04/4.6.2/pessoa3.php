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

    // método __call acrescentado na classe pessoa, agora operando diretamente sobre os atributos,
    // consequentemente fazendo invocações ao método __set
    public function __call($metodo, $params)
    {
        echo "msg: __call($metodo,".serialize($params).")\n";
        $status = true;
        switch ($metodo) {
            case 'limpar':
                $this->nome = '';
                $this->endereco = '';
                break;
            
            case 'preencher':
                $this->nome = $params[0];
                $this->endereco = $params[1];
                break;
            default:
                $status = false;
                break;
        }
        return $status;
    }
}

// mesma lógica do exemplo anterior - repaque que agora o método __set é implicitamente invocado,
// tanto para limpar, quanto para preencher o registro do usuário

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