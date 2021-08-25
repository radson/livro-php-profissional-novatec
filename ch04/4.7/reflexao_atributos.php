<?php

function tipo_prop(ReflectionProperty $prop){
    $result = array();

    if ($prop->isStatic()) {
        $result[] = 'estático';
    }

    if ($prop->isPublic()) {
        $result[] = 'publico';
    } else if ($prop->isProtected()) {
        $result[] = 'protegido';
    } else if ($prop->isPrivate()){
        $result[] = 'privado';
    }

    return implode(',', $result);
}

require('../Veiculo.class.php');

$property1 = new ReflectionProperty('Veiculo', 'cor');
$property2 = new ReflectionProperty('Veiculo', 'velocidade_max');

echo "\ngetName: " . $property1->getName();
echo "\nPropriedade: " . tipo_prop($property1);
echo "\ngetName: " . $property2->getName();
echo "\nPropriedade: " . tipo_prop($property2);
echo "\n";

?>