<?php

// declaracao da classe Veiculo
require('Veiculo.class.php');

// nova classe carro, a partir  da classe veiculo

class Carro extends Veiculo 
{
    // Atributos especificos da classe
    static protected $velocidade_max = 350;
    public $num_portas = 4;

    // metodos especificos da classe
    public function ligar_radio()
    {
        echo 'Ligar rádio do carro!';
    }
}

$car = new Carro();
$car->ligar_radio();

//Metodo acelerar e verificar_velocidade não são declarados na classe Carro
// seu código está definido na superclasse Veiculo
$car->acelerar(20);
$vel = $car->verificar_velocidade();
echo "\nvelocidade atual=$vel";

?>