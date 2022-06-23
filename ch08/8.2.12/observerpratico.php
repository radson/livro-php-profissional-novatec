<?php
require_once("Observador.class.php");
require_once("Observado.class.php");
require_once("Mensagem.class.php");
require_once("Email.class.php");

// construindo o objeto observado
$mensagem = new Mensagem();

// construindo o observador
$email = new Email($mensagem);

// mensagem sendo publicada
$mensagem->publicarMensagem();
?>