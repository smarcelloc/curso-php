<div class="titulo">Desafio Recursão</div>

<?php

/*
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10
*/

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>')
{
    foreach ($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, '#');

//////////////////////////////////////////////////////////////////////////////////////////
/*
    [
        0 => 1,
        1 => 2,
        2 => {(0) =>3, (1) => 4, (2) => 5}
        3 => 6
        4 => {(0) => 7, (1) => [8,9]}
        5 => 10
    ]

*/

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];


echo "\n\n\n";
echo "Normal com foreach -> Linha: 18\n";

function NormalForeach(array $array, string $simbolo)
{
    foreach ($array as $value) {
        if (is_array($value)) {

            foreach ($value as $value_02) {
                if (is_array($value_02)) {
                    foreach ($value_02 as $value_03) {
                        echo "$simbolo $simbolo $simbolo $value_03\n";
                    }
                } else {
                    echo "$simbolo $simbolo $value_02\n";
                }
            }
        } else {
            echo "$simbolo $value\n";
        }
    }
}

NormalForeach($array, '#');

echo "\n\n\n";
echo "Função recursiva -> Linha: 9 \n";

function ArrayRecursiva(array $array, string $simbolo): void
{
    foreach ($array as $value) {
        if (is_array($value)) {
            echo ArrayRecursiva($value, $simbolo . $simbolo[0]);
        } else {
            echo "$simbolo $value \n";
        }
    }
}


ArrayRecursiva($array, '#');
ArrayRecursiva($array, '>');
