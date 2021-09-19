<?php

class Usuario
{
    function nome()
    {
        return 'João da Silva';
    }
}

class UsuarioExt extends Usuario {}

class PrintUsuario
{
    function imprimir(Usuario $user)
    {
        echo $user->nome();
    }
}

$usuario =  new Usuario();
$print = new PrintUsuario();
$print->imprimir($usuario);

?>