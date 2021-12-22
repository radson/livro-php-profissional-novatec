<?php
require_once('Singleton.class.php');

$singleton1 = Singleton::getInstancia();
$singleton2 = Singleton::getInstancia();

if ($singleton1 === $singleton2) {
    echo "Objeto referenciando a mesma instância da mesma classe.";
}
?>