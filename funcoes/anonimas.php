<div class="titulo">Funções Anônimas</div>

<?php

// Função Anonima
// $var = function(){
// ...
//}
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>'; // 3
// $soma = 3


// Vamos entender 
// $funcao = $soma($a, $b)
// $funcao = $multiplicacao($a, $b)
// $funcao = divisao() é erro, porque não é função anônima
function executar($a, $b, $op, $recebe_funcao_soma_multiplicar_divisao)
{
    $resultado = $recebe_funcao_soma_multiplicar_divisao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);
// $soma 5


$multiplicacao = function ($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);
// $multiplicacao 6

function divisao($a, $b)
{
    return $a / $b;
}

executar(9, 3, '/', divisao);
//////////////////////////////////////////////////////
