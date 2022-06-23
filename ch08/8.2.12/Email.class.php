<?php
require_once("Observador.class.php");
require_once("Mensagem.class.php");

class Email extends Observador 
{
    public function __construct(Mensagem $mensagem)
    {
        parent::__construct($mensagem);
    }

    public function atualizar()
    {
        if ($this->getObservado()->getEstado() == Mensagem::ESTADO_MENSAGEM) {
            $this->enviarNotificacao();
        }
    }

    public function enviarNotificacao()
    {
        echo("\nEnviando e-mail para todos os usuários sobre a nova mensagem.\n");
    }
}

?>