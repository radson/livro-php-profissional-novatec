<?php
require_once("Observado.class.php");

class Mensagem extends Observado
{
    const ESTADO_INICIAL = "";
    const ESTADO_MENSAGEM = "MENSAGEM_PUBLICADA";

    public function __construct()
    {
        parent::__construct();
        $this->setEstado(self::ESTADO_INICIAL);
    }

    public function publicarMensagem()
    {
        echo("\nUma nova mensagem publicada.");
        $this->setEstado(self::ESTADO_MENSAGEM);
        $this->notificaObservadores();
        $this->setEstado(self::ESTADO_INICIAL);
    }
}

?>