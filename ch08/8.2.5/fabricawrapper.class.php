<?php

abstract class FabricaWrapper  
{
    abstract public function getWrapper();
}

class FabricaArquivoXML extends FabricaWrapper
{
    public function getWrapper()
    {
        return new ArquivoXML();
    }
}

class FabricaArquivoTexto extends FabricaWrapper
{
    public function getWrapper()
    {
        return new ArquivoTexto();
    }
}

interface Wrapper {
    public function getDados($nomeArquivo);
}

class ArquivoXML  implements Wrapper
{
    public function getDados($nomeArquivo)
    {
        return print_r(simplexml_load_file($nomeArquivo));
    }
}

class ArquivoTexto  implements Wrapper
{
    public function getDados($nomeArquivo)
    {
        return print_r(file($nomeArquivo));
    }
}



?>