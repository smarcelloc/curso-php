<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1); // ERROS aparecer na tela
//ini_set('display_errors', 0); // Não mostrar os erros na tela
// echo 4 / 0 . '<br>';

error_reporting(E_ERROR); // Nível de criticidade - ERRO
// echo 4 / 0 . '<br>';

error_reporting(E_ALL); // Nível de criticidade - TODO
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL); // Nível de criticidade - Negação de TODO
// O mesmo ini_set('display_errors', 0);
echo 4 / 0 . '<br>';

echo '<hr>';
////////////////////////////////////////////////////////////////////////////////////////////
// FILTRAR O TEXTO DE ERRO
error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';
// Filtrar o texto
function filtrarMensagem($errno, $errstring)
{
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring", $text); // Força bool '!!'
}

set_error_handler('filtrarMensagem', E_WARNING); // CHAMAR A FUNÇÃO filtrarMensagem()
////////////////////////////////////////////////////////////////////////////////////////////



echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler(); // Restaura a função anterior para gerenciamento de erro

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

// Constantes de nível e valores de bit de error_reporting().
// Valor	Constante               
// 1	    E_ERROR                 
// 2	    E_WARNING
// 4	    E_PARSE
// 8	    E_NOTICE
// 16	    E_CORE_ERROR
// 32	    E_CORE_WARNING
// 64	    E_COMPILE_ERROR
// 128	    E_COMPILE_WARNING
// 256	    E_USER_ERROR
// 512	    E_USER_WARNING
// 1024	    E_USER_NOTICE
// 6143	    E_ALL                   
// 2048	    E_STRICT
// 4096	    E_RECOVERABLE_ERROR