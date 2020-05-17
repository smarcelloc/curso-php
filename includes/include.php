<div class="titulo">Include</div>

<?php
echo 'Executei essa linha do arquivo include<br>';

include('include_arquivo.php');
/*
    // include_arquivo.php
    <?php
        echo 'Carregando: include_arquivo<br>';

        $variavel = 'Estou definida';

            function soma($a, $b) { // 1 VEZ (OK)
                return $a + $b;
            }
*/

// DUAS VEZES

//include('include_arquivo.php'); //ERRO, PORQUE
// VOCÊ DEFINIU EM INCLUDE_ARQUIVO.PHP DUAS VEZES UMA FUNÇÃO
// ou seja
/*
    // include_arquivo.php
    <?php
        echo 'Carregando: include_arquivo<br>';

        $variavel = 'Estou definida';

            function soma($a, $b) { // 2 VEZ (ERRO FUNÇÃO COM O MESMO NOME É INVÁLIDO)
                return $a + $b;
            }
    
*/
// Variavel sendo devido duas ou mais pode.


/**
 * CORREÇÃO: utilizado no CODEIGNITER 3 EM HELPER (LEMBRA)
 * 
 * if(!function_exists('soma')) {
 *   function soma($a, $b) {
 *        return $a + $b;
 *    }
 * }
 * 
 */

echo soma(3, 8) . '!<br>';
echo "O conteúdo da variável é '{$variavel}'.";
