<?php

// inclusão da classe veículo
require('../Veiculo.class.php');

// instanciar objeto da classe ReflectionClass
$class = new ReflectionClass('Veiculo');

// extrair informações sobre a classe veículo
echo "getName: " . $class->getName();
echo "\ngetFileName: " . $class->getFileName();
echo "\nisInternal: " . ($class->isInternal()? 'internal' : 'user-defined');
echo "\nisFinal: " . ($class->isFinal()? 'final' : '');
echo "\n";
?>