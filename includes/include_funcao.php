<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo()
{
    include('include_arquivo.php');


    /* 
    
        <?php
            echo 'Carregando: include_arquivo<br>';

            $variavel = 'Estou definida';

            if(!function_exists('soma')) {
                function soma($a, $b) {
                    return $a + $b;
                }
            }
    
    
    */


    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '!<br>';
carregarArquivo();

echo "Variável = '{$variavel}'.";
// var_dump($variavel);
echo '<br>' . soma(3, 8);
