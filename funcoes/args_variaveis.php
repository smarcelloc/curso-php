<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b)
{
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>';


/// a declaração (...) é array
function somaCompleta(...$numeros)
{
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);



$array = [6, 7, 8];
echo '<br>' . somaCompleta($array); // matriz 
// array(0) => [array(0) => 6, array(1) => 7, array(2) => 8]

echo '<br>' . somaCompleta(...$array); // vertor
// ... => array(0) => 6, array(1) => 7, array(2) => 8

function membros($titular, ...$dependentes)
{
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto", "Junior");
