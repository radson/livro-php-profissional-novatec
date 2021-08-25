<?php

function tipo_metodo(ReflectionMethod $met)
{
    $result = array();

    if ($met->isConstructor()) {
        $result[] = 'construtor';
    } elseif ($met->isDestructor()) {
        $result[] = 'destrutor';
    }

    if ($met->isPublic()) {
        $result[] = 'público';
    } elseif ($met->isProtected()) {
        $result[] = 'protegido';
    } elseif ($met->isPrivate()) {
        $result[] = 'privado';
    }

    return implode(',', $result);
    
}

require('../Veiculo.class.php');

$method1 = new ReflectionMethod('Veiculo', '__construct');
$method2 = new ReflectionMethod('Veiculo', 'alterar_velocidade');

echo "\ngetName: " . $method1->getName();
echo "\nMétodo: " . tipo_metodo($method1);
echo "\ngetName: " . $method2->getName();
echo "\nMétodo: " . tipo_metodo($method2);
echo "\n";

?>