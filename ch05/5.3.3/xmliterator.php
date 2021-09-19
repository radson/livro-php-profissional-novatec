<?php

$paises = <<<xmlpaises
<?xml version="1.0" encoding="iso-8859-1"?>\n
<paises>\n
    <pais>\n
        <nome>Brasil</nome>\n
        <moeda>Real</moeda>\n
    </pais>\n
    <pais>\n
        <nome>Inglaterra</nome>\n
        <moeda>Libra</moeda>\n
    </pais>\n
</paises>\n
xmlpaises;

foreach (new SimpleXMLIterator($paises) as $pais) {
    echo("Pais: " . $pais->nome . "\n");
    echo("Moeda: ". $pais->moeda . "\n");
}

?>