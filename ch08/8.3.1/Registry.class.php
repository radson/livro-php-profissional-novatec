<?php
class Registry  
{
    private static $instancia = null;
    private $cliente = null;

    private function __construct(){}

    public static function getInstancia()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function getCliente()
    {
        return $this->obj_cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
}

?>