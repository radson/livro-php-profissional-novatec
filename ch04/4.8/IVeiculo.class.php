<?php
interface IVeiculo {
    function acelerar($incr=1);
    function frear($decr=1);
    function verificar_velocidade();
}

?>