<?php

// declarando uma interface
interface ImprimeAlgo {
    public function imprime();
}

// a classe abstrata MinhaClasseAbstrata implementa ImprimeAlgo
// porém não precisa fazer isso no corpo de sua definição
// deixando isso para clasess que estenderem dela

abstract class MinhaClasseAbstrata implements ImprimeAlgo
{
    // deixando para as classes concretas implementarem esses métodos
    public abstract function getValor();
    public abstract function prefixo($valor);
    
    public function mostrandoValor()
    {
        print $this->getValor() . "\n";
    }
}

// aqui é implementado o método da interface ImprimeAlgo
class ClasseConcreta1 extends MinhaClasseAbstrata
{
    public function getValor()
    {
        return "ClasseConcreta1\n";
    }

    public function prefixo($valor)
    {
        return "{$valor}ClasseContreta1\n";
    }

    public function imprime()
    {
        echo "Imprimindo ClasseConcreta1\n";
    }
}

// aqui também é implementado o método da interface ImprimeAlgo

class ClasseConcreta2 extends MinhaClasseAbstrata
{
    public function getValor()
    {
        return "ClasseConcreta2\n";
    }

    public function prefixo($valor)
    {
        return "{$valor}ClasseConcreta2\n";
    }

    public function imprime()
    {
        echo "Imprimindo ClasseConcreta2\n";
    }
}

$classe1 = new ClasseConcreta1();
echo $classe1->getValor();
echo $classe1->prefixo('CLASSE1_')."\n";
$classe1->imprime();

$classe2 = new ClasseConcreta2();
echo $classe2->getValor();
echo $classe2->prefixo('CLASSE2_')."\n";
$classe2->imprime();

$abstrata = new MinhaClasseAbstrata();




?>