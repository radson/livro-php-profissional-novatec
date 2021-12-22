<?php

abstract class FabricaWrapper 
{
    abstract public function getWrapper();
    abstract public function getWrapperCripto();
}

class FabricaAquivoXML extends FabricaWrapper
{
    public function getWrapper()
    {
        return new ArquivoXML();
    }

    public function getWrapperCripto()
    {
        return new ArquivoXMLCripto();
    }
}

class FabricaArquivoTexto extends FabricaWrapper
{
    public function getWrapper()
    {
        return new ArquivoTexto();
    }

    public function getWrapperCripto()
    {
        return new ArquivoTextoCripto();
    }
}

interface Wrapper
{
    public function getDados($nomeArquivo);
}

class ArquivoXML  implements Wrapper
{
    public function getDados($nomeArquivo)
    {
        return print_r(simplexml_load_file($nomeArquivo));
    }
}

class ArquivoTexto implements Wrapper
{
    public function getDados($nomeArquivo)
    {
        return print_r(file($nomeArquivo));
    }
}

interface WrapperCripto 
{
    public function getDadosCriptografados($nomeArquivo);
}

class ArquivoXMLCripto implements WrapperCripto
{
    public function getDadosCriptografados($nomeArquivo)
    {
        return print_r(md5(simplexml_load_file($nomeArquivo)));
    }
}

class ArquivoTextoCripto implements WrapperCripto
{
    public function getDadosCriptografados($nomeArquivo)
    {
        return print_r(md5(file($nomeArquivo)));
    }
}

?>