<?php

$usuario = $senha = $db = 'teste';

$conn = mysql_connect('localhost', $usuario, $senha) or die('Erro #'.mysql_errno() . ': ' . mysql_error());

mysql_select_db($db, $conn) or die("Erro: não foi possível selecinoar banco $bd");

$sql = "SELECT codigo, nome FROM cidades ORDER BY nome";
$result = mysql_query($sql) or die('Erro sql #' . mysql_errno() . ': ' . mysql_error());

if (mysql_num_rows($result) != 0) {
    $val = mysql_fetch_object($result) or die('Erro extração #' . mysql_errno() . ': ' . mysql_error());
}

// continuação do código

?>