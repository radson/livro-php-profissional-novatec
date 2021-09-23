<?php

$usuario = $senha = $db = 'teste';

if(!($conn = @mysql_connect('localhost', $usuario, $senha))){
    finaliza(1, mysql_error());
}

if (!@mysql_select_db($db, $conn)) {
    finaliza(2, "não foi possível selecionar banco $db");
}

$sql = "SELECT codigo, nome FROM cidades ORDER BY nome";

if (!($result = @mysql_query($sql))) {
    finaliza(3, mysql_error());
}

if (@mysql_num_rows($result) != 0) {
    if (!($val = @mysql_fetch_object($result))) {
        finaliza(4, mysql_error());
    }
}

// continuação do código

finaliza();

function finaliza($codigo = 0, $msg = '')
{
    // encerra conexão com banco - se existir
    global $conn;
    if (isset($conn)) {
        mysql_close($conn);
    }

    // gravar mensagem no arquivo - caso erro foi gerado
    if ($codigo) {
        $handle = fopen('logs.txt', 'a');
        fwrite($handle, $msg);
        fclose($handle);
        echo "Erro # $codigo: $msg";
    }

    die(0);
}

?>