<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php');
// arquivo return_usado.php deve ter RETURN ...;
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
// arquivo return_nao_usado.php deve ter RETURN ...;

// var_dump($valorRetorno2);
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";

// INCLUDE 
// return normal
// caso não tenha RETURN no arquiv return_nao_usado2.php
// RESULTA: 1 TRUE (encontrado) \ 0 FALSE (não encontrado)
// REQUIRE -> ERRO FATAL
$valorRetorno2 = require(__DIR__ . '/return_nao_usado2.php');
