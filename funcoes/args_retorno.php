<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem()
{
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome)
{
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Tiago');

function soma($a, $b)
{
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);


// Não troca
function trocarValor($a, $novoValor)
{
    $a = $novoValor;
}

$variavel = 0;


// O valor não é trocado
trocarValor($variavel, 3);
echo '<br> -> ', $variavel; // 0


// Esta função troca de valor sem GLOBAL
// usamos &$a  (nome disso é parâmetro com referência)
// isso não é muito recomendável
// &$a copiar o endereço da memoria da $variavel
// Portanto, ponteiro
function trocarValorDeVerdade(&$a, $novoValor)
{
    // o mesmo global $variavel  = $novoValor
    $a = $novoValor;
}

// Novo $variavel 
trocarValorDeVerdade($variavel, 5000);
echo '<br> NOVO com &: ', $variavel;
