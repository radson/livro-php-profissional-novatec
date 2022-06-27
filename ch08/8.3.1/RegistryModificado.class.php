<?php
class RegistryModificado  
{
    private static $instancia = null;
    private $clientes = array();

    private function __construct(){}

    public static function getInstancia()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    public function getCliente($chave)
    {
        return $this->clientes[$chave];
    }

    public function setCliente($chave, $cliente)
    {
        $this->clientes[$chave] = $cliente;
    }
}

?>