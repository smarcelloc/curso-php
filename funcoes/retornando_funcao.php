<div class="titulo">Retornando Função</div>

<?php
function soma($a)
{
    // algoritmo (30s)
    return function ($b) use ($a) {
        return $a + $b; // 3s
    };
}

echo soma(13)(3);

// soma(13)(3) => 13+3 = 16

// $doisMais = soma(2) => 2 + 0 => 2
// $doisMais(10) => 2 + 10 => 12
// $doisMais(18) => 2 + 18 => 20
// $doisMais(30) => 2 + 30 => 32

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);


function unidade_de_peso(int $numero_do_peso)
{
    /*
        DEU ERRO NESTA FUNÇÃO 
            RETORNANDO FUNÇÃO

        ERRO FALTA USO DO COMANDO "USE"
        return function(int $numero_novo_b){
            return $numero_a * $numero_novo_b;
        }*/
    return function (string $unidade_do_peso) use ($numero_do_peso) {
        return "\n\nPESO: $numero_do_peso $unidade_do_peso";
    };
}


echo unidade_de_peso(20)('kg');
