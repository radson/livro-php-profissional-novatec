<?php
    class Singleton 
    {
        private static $instancia = null;
        private function __construct() {}
        public static function getInstancia()
        {
            if (self::$instancia == null) {
                self::$instancia = new self();
            }
            return self::$instancia;
        }
    }
    
?>