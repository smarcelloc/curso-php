<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor() {
    // Será trocado quando for chamado
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor(); // Vai ser trocado $variavel
echo "Depois: $variavel <br>";

function trocaValorDeVerdade() {
    // Será trocado AGORA!
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade(); // nem precisa da função é inútil,
                        // porque já foi trocado na função trocaValorDeVerdade()
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade()); // null porque não tem retorno