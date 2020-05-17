<div class="titulo">Include vs Require</div>

<?php


/*

    INCLUDE (erro normal) VS REQUIRE (erro FATAL)

    INCLUDE: gera erro, mas não para a aplicação
    REQUIRE: gera erro e para aplicação

*/



ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo... <br>';
