<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
{
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao(); // Senhor(a) Cliente
echo saudacao(NULL); // Cliente
echo saudacao(null, NULL); //
echo saudacao('Mestre', 'Supremo');


function anotarPedido($comida, $bebida = 'Água')
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

// ISSO NÃO MUITO INDICADO
// 1º Parametro -> deve ser obrigatório $comida
// 2º Parametro -> deve ser opicional
function anotarPedido2($bebida = 'Água', $comida)
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Pizza2');
