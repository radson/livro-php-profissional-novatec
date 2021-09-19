<?php

// informe o diretório que se quer analisar

$diretorio = new DirectoryIterator("."); // Caminho relativo para o diretorio atual

foreach ($diretorio as $arquivo) {
    if ($arquivo->isFile()) {
        echo("Arquivo: " . $arquivo->getFilename()."\n");
        echo("Tamanho: " . number_format(($arquivo->getSize()/1024), 2)."Kb\n");
        echo("Data de criação: " . date("D d M Y H:i:s a", $arquivo->getCTime())."\n");
        echo("Tipo do Arquivo: " . $arquivo->getType() . "\n");
    }
}

?>