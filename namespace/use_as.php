<?php

namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');
// NAMESPACE DO ARQUIVO use_as_arquivo.php é 'Nome\Bem\Grande'



function soma($a, $b)
{
    return $a . $b; // EU SEI, SOMENTE PARA TESTE
}

class Classe
{
    public $var;

    function func()
    {
        echo __NAMESPACE__ . ' -> ' .
            __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}
///////////////////////////////////////////////////////////////////////////////////////////



// Mostrar \Nome\Bem\Grande\constante
echo \Nome\Bem\Grande\constante . '<br>'; // 123 no use_as_arquivo.php 

// 
use const \Nome\Bem\Grande\constante; // 123 constante do use_as_arquivo.php
echo '-> ' . constante . '<br>'; // 123



//////////////////////// DECLARAÇÃO PARA CTX ///////////////////////////////////////////////
use Nome\Bem\Grande as ctx;

// Nome\Bem\Grande\ -> ctx\soma, ou seja, Nome\Bem\Grande\soma
/**
 * Nome ARQUIVO -> use_as_arquivo.php
 * function soma($a, $b) {
 *  return $a + $b;}
 */
echo 'ctx::' . ctx\soma(1, 2) . '<br>'; // 3



/**
 * nome ARQUIVO -> atual
 * function soma($a, $b){return $a . $b; // EU SEI, SOMENTE PARA TESTE
 */
echo ' ---> ' . soma(1, 2) . '<br>'; // 12
////////////////////////////////////////////////////////////////////////////////////////////



// Nome\Bem\Grande\soma() função renomear somaReal(x,y)  'as' ATENÇÃO [USE FUNCTION ...]
use function Nome\Bem\Grande\soma as somaReal; // use use_as_arquivo.php
echo somaReal(100, 212) . '<br>';
///////////////////////////////////////////////////////////////////////////


//////////////////////////////// CLASSE NO NAMESPACE /////////////////////////////////////
// ARQUIVO ATUAL
$a = new Classe();
$a->func(); // return Outro\Nome -> Outro\Nome\Classe -> Outro\Nome\Classe::func


// ARQUIVO use_as_arquivo.php  /////////////////////////////////////////////////////////////
// Namespace \Nome\Bem\Grande\Classe();
$b = new \Nome\Bem\Grande\Classe();
$b->func(); // return Nome\Bem\Grande ->Nome\Bem\Grande\Classe ->Nome\Bem\Grande\Classe::func


// LEMBRA: use Nome\Bem\Grande as ctx;
// ENTÃO: Nome\Bem\Grande\Classe();
$c = new ctx\Classe();
$c->func(); // Nome\Bem\Grande -> Nome\Bem\Grande\Classe -> Nome\Bem\Grande\Classe::func

// uso de AS para renomear a classe
use \Nome\Bem\Grande\Classe as D;

$d = new D();
$d->func(); // Nome\Bem\Grande -> Nome\Bem\Grande\Classe -> Nome\Bem\Grande\Classe::func
/////////////////////////////////////////////////////////////////////////////////////////////

// RENOMEAR 'AS' FUNCTION VS CLASSE
// FUNCTION: use function Nome\Bem\Grande\soma as somaReal;
// CLASSE: use \Nome\Bem\Grande\Classe as D;