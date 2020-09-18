<?php

namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>


<!--
    Atenção: está errado, pois o namespace deve está em 1º lugar

    <div class="titulo">Exemplo Básico</div>
    <w?php namespace contexto; ?>

    CORRETO:
    <w?php namespace contexto; ?>
    <div class="titulo">Exemplo Básico</div>
-->

<?php
// __NAMESPACE__: Diretiva para buscar o namespace atual do arquivo.php
echo __NAMESPACE__ . '<br>'; // contexto na linha:3

// constantes duas forma de declaração
const CONSTANTE1 = 123; // por variável

// Diferença entre 'CONSTANTE_RAIZ' vs 'contexto\CONSTANTE2'
// Declarado e acessível global 'CONSTANTE_RAIZ' -> está na raiz do PHP
// Declarado e acessível no namespace chamado 'contexto' -> 'contexto\CONSTANTE2'
define('CONSTANTE_RAIZ', 10); // Fica na raiz do PHP
define('contexto\CONSTANTE2', 234); // por definição define(namespace/nome_constante, valor)

define(__NAMESPACE__ . '\CONSTANTE3', 345);
define('outro_namespace\CONSTANTE4', 456); // namespace de terceiro

/////////////////////////////////////////////////////////////////////////////////////////

echo CONSTANTE1 . '<br>'; // 123
echo CONSTANTE2 . '<br>'; // 234
echo CONSTANTE_RAIZ . '<br>'; // 10

////// OUTRO CASO //////////////////////////////////////////////////////////////////////

define('CONSTRANTE3', 500);
define('contexto\CONSTANTE3', 400); // por definição define(namespace/nome_constante, valor)



echo CONSTANTE1 . '<br>'; // 123
echo CONSTANTE2 . '<br>'; // 234
echo CONSTANTE_RAIZ . '<br>'; // 10

// Pela lógica deveria mostrar CONSTRANTES3 -> 500, porém o PHP privilégia o contexto\CONSTANTE3 -> 400 
echo CONSTRANTE3 . '<br>'; // 400 

// COMO ACESSAR CONSTRANTES3 -> 500
// '\' significa raiz do php
echo \CONSTRANTE3 . '<br>';
echo \contexto\CONSTANTE3 . '<br>'; // Correto: pois o caminho é absoluto
//echo contexto\CONSTANTE3 . '<br>'; // ERRADO: porque o caminho é relativo
// Ele entende assim: \contexto\contexto\CONSTANTE


// PARA ACESSAR CONSTRANTES NO NAMESPACE TERCEIRO
echo \outro_namespace\CONSTANTE4 . '<br>';

// ESTRUTURA DO PHP para entender o namespace;
// '\' namespace raíz do PHP

//      '\contexto' namespace contexto
//          '\contexto\texto' namespace texto (subnamespace)

//      '\recursos' namespace recursos
//          '\recursos\dinheiro' namespace dinheiro (subnamespace)
//          '\recursos\pessoas' namespace pessoas   (subnamespace)



//////////////////////////////////////////////////////////////////////////////////////////


// echo contexto\CONSTANTE3 . '<br>';
echo \contexto\CONSTANTE3 . '<br>';
echo constant(__NAMESPACE__ . '\CONSTANTE3') . '<br>';
// echo CONSTANTE4 . '<br>';
//echo \outro_contexto\CONSTANTE4 . '<br>';


// FUNCIONAMENTE DO NAMESPACE -> CONSTANTES
function soma($a, $b)
{
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

// USO DE FUNÇÃO COM MESMO NOME DA RAIZ PADRÃO DO PHP
// OU SEJA, NA API DO PHP (strpos -> Encontre a posição da primeira ocorrência de uma substring em uma string) 

// ALIÁS ISSO PODE, PORQUE ESTÁ SOBREESCREVENDO STRPOS NO NAMESPACE \contexto
function strpos($str, $text)
{
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

// ACESSAR O STRPOS DO \contexto, ou seja \contexto\strpos
echo strpos('Texto genérico para busca', 'busca') . '<br>';

// Acessar o strpos do PHP RAIZ
echo \strpos('Texto genérico para busca', 'busca') . '<br>';
