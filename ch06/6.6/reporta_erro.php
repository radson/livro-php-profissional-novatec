<?php

// desliga a reportação de todos os erros
error_reporting(0);

// reporta erros de execução que não comprometem o sistema
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// reporta E_NOTICE mais os erros que não comprometem o sistema
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// reporta todos os erros menos os tipos E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);

// reporta todos os erros do PHP
error_reporting(E_ALL);

// faz a mesma coisa que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>