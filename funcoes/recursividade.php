<div class="titulo">Recursividade</div>


<?php

/*
    A mesma função dentro dela mesmo ...

*/

function somaUmAte($numero)
{
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';

function somaRecursivaUmAte($numero)
{
    // Condição de Parada!!!!
    if ($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';

function somaRecursivaEconomica($numero)
{
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';

///////////////////////////////////////////////////////////////////////////////

function fatorial(int $numero): int
{
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    return $fatorial;
}

echo fatorial(4);

// CHAMAR ELA MESMO, como fosse o for, while ...
// 1 - Condição de parada (não loop infinito)
// 2 - Contador para diminui-lo

function recursivaFatorial(int $numero)
{
    // Condição  de parada
    if ($numero !== 1) {
        // - 1 = contador para dimunui-lo
        return $numero * recursivaFatorial($numero - 1);
    } else {
        // Se não incluir return 1
        // o sistema retorna 0 -> qualquer número 
        // multiplicado por zero -> zera toda a conta
        return 1;
    }
}


echo recursivaFatorial(4);

///////////////////////////////////////////////////////////////
// 1 - Condição de parada
function RecursivaEconomicaFatorial($numero)
{
    return $numero != 1 ? $numero * RecursivaEconomicaFatorial($numero - 1) : 1;
}

echo '<br><br><br>', RecursivaEconomicaFatorial(5);
