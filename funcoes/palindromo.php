<div class="titulo">Desafio Palindromo</div>

<?php

// palindromo é inverter o caracter e sendo igualcomo 
//  c  a   s   a            isso não é palindromo
//  a  s   a   c

//  a   r   a   r   a       isso é palindromo
//  a   r   a   r   a

function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';
echo '<br>';

function palindromoSimples($palavra)
{
    // inverter a string strrev()
    /// ou seja, palavra é marcello
    // com strrev fica -> ollecram

    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';
